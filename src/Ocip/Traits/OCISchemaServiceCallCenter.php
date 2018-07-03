<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentAvailability;
use CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentSettings;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentThresholdDefaultProfileGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentThresholdDefaultProfileGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentThresholdProfileAddAgentListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentThresholdProfileAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentThresholdProfileDeleteAgentListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentThresholdProfileDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentThresholdProfileGetAvailableAgentListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentThresholdProfileGetAvailableAgentListResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentThresholdProfileGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentThresholdProfileGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentThresholdProfileGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentThresholdProfileGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentThresholdProfileModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentUnavailableCodeAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentUnavailableCodeDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentUnavailableCodeGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentUnavailableCodeGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentUnavailableCodeGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentUnavailableCodeGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentUnavailableCodeModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentUnavailableCodeSettingsGetRequest17sp4;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentUnavailableCodeSettingsGetResponse17sp4;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentUnavailableCodeSettingsModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterCallDispositionCodeAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterCallDispositionCodeDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterCallDispositionCodeGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterCallDispositionCodeGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterCallDispositionCodeGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterCallDispositionCodeGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterCallDispositionCodeGetUsageListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterCallDispositionCodeGetUsageListResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterCallDispositionCodeModifyActiveListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterCallDispositionCodeModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterCurrentAndPastAgentGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterCurrentAndPastAgentGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterCurrentAndPastCallCenterGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterCurrentAndPastCallCenterGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterCurrentAndPastDNISGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterCurrentAndPastDNISGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingBrandingGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingBrandingGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingBrandingModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingGetAvailableReportTemplateListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingGetAvailableReportTemplateListResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingGetRequest19;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingGetResponse19;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingModifyRequest19;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingReportTemplateAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingReportTemplateDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingReportTemplateGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingReportTemplateGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingReportTemplateGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingReportTemplateGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingReportTemplateModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingScheduledReportAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingScheduledReportDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingScheduledReportGetActiveListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingScheduledReportGetActiveListResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingScheduledReportGetCompletedListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingScheduledReportGetCompletedListResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingScheduledReportGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingScheduledReportGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingScheduledReportGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingScheduledReportGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingScheduledReportModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterGetRequest17sp4;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterGetResponse17sp4;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterGetRoutingPolicyRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterGetRoutingPolicyResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterModifyRoutingPolicyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAddAgentListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAddDNISRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAddInstanceRequest22;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAddSupervisorListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentThresholdDefaultProfileGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentThresholdDefaultProfileGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentThresholdProfileAddAgentListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentThresholdProfileAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentThresholdProfileDeleteAgentListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentThresholdProfileDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentThresholdProfileGetAvailableAgentListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentThresholdProfileGetAvailableAgentListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentThresholdProfileGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentThresholdProfileGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentThresholdProfileGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentThresholdProfileGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentThresholdProfileModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentUnavailableCodeAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentUnavailableCodeDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentUnavailableCodeGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentUnavailableCodeGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentUnavailableCodeGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentUnavailableCodeGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentUnavailableCodeModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentUnavailableCodeSettingsGetRequest17sp4;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentUnavailableCodeSettingsGetResponse17sp4;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentUnavailableCodeSettingsModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterBouncedCallGetRequest17;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterBouncedCallGetResponse17;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterBouncedCallModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterCallDispositionCodeAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterCallDispositionCodeDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterCallDispositionCodeGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterCallDispositionCodeGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterCallDispositionCodeGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterCallDispositionCodeGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterCallDispositionCodeGetUsageListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterCallDispositionCodeGetUsageListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterCallDispositionCodeModifyActiveListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterCallDispositionCodeModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterComfortMessageBypassGetRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterComfortMessageBypassGetResponse20;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterComfortMessageBypassModifyRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterCurrentAndPastAgentGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterCurrentAndPastAgentGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterCurrentAndPastCallCenterGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterCurrentAndPastCallCenterGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterCurrentAndPastDNISGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterCurrentAndPastDNISGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterDeleteAgentListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterDeleteDNISRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterDeleteInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterDeleteSupervisorListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterDistinctiveRingingGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterDistinctiveRingingGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterDistinctiveRingingModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingBrandingGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingBrandingGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingBrandingModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingGetAvailableReportTemplateListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingGetAvailableReportTemplateListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingGetRequest19;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingGetResponse19;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingModifyRequest19;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingReportTemplateAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingReportTemplateDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingReportTemplateGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingReportTemplateGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingReportTemplateGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingReportTemplateGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingReportTemplateModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingScheduledReportAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingScheduledReportDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingScheduledReportGetActiveListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingScheduledReportGetActiveListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingScheduledReportGetCompletedListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingScheduledReportGetCompletedListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingScheduledReportGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingScheduledReportGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingScheduledReportGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingScheduledReportGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingScheduledReportModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterForcedForwardingGetRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterForcedForwardingGetResponse20;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterForcedForwardingModifyRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetAgentListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetAnnouncementRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetAnnouncementResponse20;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetAvailableAgentListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetAvailableAgentListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetAvailableSupervisorListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetAvailableSupervisorListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetDistinctiveRingingRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetDistinctiveRingingResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetDNISAgentListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetDNISAgentListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetDNISAnnouncementRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetDNISListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetDNISListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetDNISRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetInstanceListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetInstanceListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetInstanceQueueStatusRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetInstanceQueueStatusResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetInstanceRequest22;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetInstanceResponse22;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetInstanceStatisticsReportingRequest17sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetInstanceStatisticsReportingResponse17sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetInstanceStatisticsRequest14sp9;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetInstanceStatisticsResponse14sp9;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetRequest17sp4;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetResponse17sp4;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetRoutingPolicyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetRoutingPolicyResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetSupervisorListRequest16;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetUnlicensedAgentListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterHolidayServiceGetRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterHolidayServiceGetResponse20;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterHolidayServiceModifyRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterModifyActiveInstanceListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterModifyAgentListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterModifyAnnouncementRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterModifyDistinctiveRingingRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterModifyDNISAnnouncementRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterModifyDNISParametersRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterModifyDNISRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterModifyInstanceRequest22;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterModifyInstanceStatisticsReportingRequest17sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterModifyInstanceWeightedCallDistributionRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterModifyRoutingPolicyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterModifySupervisorListRequest16;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterNightServiceGetRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterNightServiceGetResponse20;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterNightServiceModifyRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterOverflowGetRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterOverflowGetResponse20;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterOverflowModifyRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterQueueCallDispositionCodeAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterQueueCallDispositionCodeDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterQueueCallDispositionCodeGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterQueueCallDispositionCodeGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterQueueCallDispositionCodeGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterQueueCallDispositionCodeGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterQueueCallDispositionCodeModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterQueueCallDispositionCodeSettingsGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterQueueCallDispositionCodeSettingsGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterQueueCallDispositionCodeSettingsModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterQueueStatusNotificationGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterQueueStatusNotificationGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterQueueStatusNotificationModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterQueueThresholdsGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterQueueThresholdsModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterStrandedCallGetRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterStrandedCallGetResponse20;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterStrandedCallModifyRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterStrandedCallUnavailableGetRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterStrandedCallUnavailableGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterStrandedCallUnavailableModifyRequest20;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingBrandingGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingBrandingGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingBrandingModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingDataTemplateGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingDataTemplateGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingReportTemplateAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingReportTemplateDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingReportTemplateGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingReportTemplateGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingReportTemplateGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingReportTemplateGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingReportTemplateModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingScheduledReportGetActiveListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingScheduledReportGetActiveListResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingScheduledReportGetCompletedListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingScheduledReportGetCompletedListResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingScheduledReportGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingScheduledReportGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingScheduledTaskParametersGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingScheduledTaskParametersGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingScheduledTaskParametersModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterGetRequest21;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterGetResponse21;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterAddSupervisedAgentListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterAgentDetailsGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterAgentDetailsGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterAgentSignOutRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterAgentSignOutResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterCallDispositionCodeGetAvailableListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterCallDispositionCodeGetAvailableListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterDeleteSupervisedAgentListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterEnhancedReportingReportTemplateParamInfoGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterEnhancedReportingReportTemplateParamInfoGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterEnhancedReportingScheduledReportDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterEnhancedReportingScheduledReportGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterEnhancedReportingScheduledReportGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterEnhancedReportingScheduledReportModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterGetAgentSupervisorListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterGetAgentSupervisorListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterGetAvailableCallCenterListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterGetAvailableCallCenterListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterGetAvailableDNISListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterGetAvailableDNISListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterGetRequest19;
use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterGetResponse19;
use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterGetSupervisedAgentListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterGetSupervisedAgentListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterGetSupervisorCallCenterListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterGetSupervisorCallCenterListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterModifyCallCenterListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterModifyRequest19;
use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterModifySupervisedAgentListRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServiceCallCenter
{

    /**
     * @param CallCenterAgentAvailability $request
     * @return
     */
    public function callCenterAgentAvailability(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentAvailability $request)
    {
        return $this->call($request);
    }

    /**
     * @param CallCenterAgentSettings $request
     * @return
     */
    public function callCenterAgentSettings(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentSettings $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterAgentThresholdDefaultProfileGetRequest $request
     * @return EnterpriseCallCenterAgentThresholdDefaultProfileGetResponse|ErrorResponse
     */
    public function enterpriseCallCenterAgentThresholdDefaultProfileGetRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentThresholdDefaultProfileGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterAgentThresholdProfileAddAgentListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function enterpriseCallCenterAgentThresholdProfileAddAgentListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentThresholdProfileAddAgentListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterAgentThresholdProfileAddRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function enterpriseCallCenterAgentThresholdProfileAddRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentThresholdProfileAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterAgentThresholdProfileDeleteAgentListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function enterpriseCallCenterAgentThresholdProfileDeleteAgentListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentThresholdProfileDeleteAgentListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterAgentThresholdProfileDeleteRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function enterpriseCallCenterAgentThresholdProfileDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentThresholdProfileDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterAgentThresholdProfileGetAvailableAgentListRequest $request
     * @return EnterpriseCallCenterAgentThresholdProfileGetAvailableAgentListResponse|ErrorResponse
     */
    public function enterpriseCallCenterAgentThresholdProfileGetAvailableAgentListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentThresholdProfileGetAvailableAgentListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterAgentThresholdProfileGetListRequest $request
     * @return EnterpriseCallCenterAgentThresholdProfileGetListResponse|ErrorResponse
     */
    public function enterpriseCallCenterAgentThresholdProfileGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentThresholdProfileGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterAgentThresholdProfileGetRequest $request
     * @return EnterpriseCallCenterAgentThresholdProfileGetResponse|ErrorResponse
     */
    public function enterpriseCallCenterAgentThresholdProfileGetRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentThresholdProfileGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterAgentThresholdProfileModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function enterpriseCallCenterAgentThresholdProfileModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentThresholdProfileModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterAgentUnavailableCodeAddRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function enterpriseCallCenterAgentUnavailableCodeAddRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentUnavailableCodeAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterAgentUnavailableCodeDeleteRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function enterpriseCallCenterAgentUnavailableCodeDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentUnavailableCodeDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterAgentUnavailableCodeGetListRequest $request
     * @return EnterpriseCallCenterAgentUnavailableCodeGetListResponse|ErrorResponse
     */
    public function enterpriseCallCenterAgentUnavailableCodeGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentUnavailableCodeGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterAgentUnavailableCodeGetRequest $request
     * @return EnterpriseCallCenterAgentUnavailableCodeGetResponse|ErrorResponse
     */
    public function enterpriseCallCenterAgentUnavailableCodeGetRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentUnavailableCodeGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterAgentUnavailableCodeModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function enterpriseCallCenterAgentUnavailableCodeModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentUnavailableCodeModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterAgentUnavailableCodeSettingsGetRequest17sp4 $request
     * @return EnterpriseCallCenterAgentUnavailableCodeSettingsGetResponse17sp4
     */
    public function enterpriseCallCenterAgentUnavailableCodeSettingsGetRequest17sp4(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentUnavailableCodeSettingsGetRequest17sp4 $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterAgentUnavailableCodeSettingsModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function enterpriseCallCenterAgentUnavailableCodeSettingsModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentUnavailableCodeSettingsModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterCallDispositionCodeAddRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function enterpriseCallCenterCallDispositionCodeAddRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterCallDispositionCodeAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterCallDispositionCodeDeleteRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function enterpriseCallCenterCallDispositionCodeDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterCallDispositionCodeDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterCallDispositionCodeGetListRequest $request
     * @return EnterpriseCallCenterCallDispositionCodeGetListResponse|ErrorResponse
     */
    public function enterpriseCallCenterCallDispositionCodeGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterCallDispositionCodeGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterCallDispositionCodeGetRequest $request
     * @return EnterpriseCallCenterCallDispositionCodeGetResponse|ErrorResponse
     */
    public function enterpriseCallCenterCallDispositionCodeGetRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterCallDispositionCodeGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterCallDispositionCodeGetUsageListRequest $request
     * @return EnterpriseCallCenterCallDispositionCodeGetUsageListResponse|ErrorResponse
     */
    public function enterpriseCallCenterCallDispositionCodeGetUsageListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterCallDispositionCodeGetUsageListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterCallDispositionCodeModifyActiveListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function enterpriseCallCenterCallDispositionCodeModifyActiveListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterCallDispositionCodeModifyActiveListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterCallDispositionCodeModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function enterpriseCallCenterCallDispositionCodeModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterCallDispositionCodeModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterCurrentAndPastAgentGetListRequest $request
     * @return EnterpriseCallCenterCurrentAndPastAgentGetListResponse|ErrorResponse
     */
    public function enterpriseCallCenterCurrentAndPastAgentGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterCurrentAndPastAgentGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterCurrentAndPastCallCenterGetListRequest $request
     * @return EnterpriseCallCenterCurrentAndPastCallCenterGetListResponse|ErrorResponse
     */
    public function enterpriseCallCenterCurrentAndPastCallCenterGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterCurrentAndPastCallCenterGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterCurrentAndPastDNISGetListRequest $request
     * @return EnterpriseCallCenterCurrentAndPastDNISGetListResponse|ErrorResponse
     */
    public function enterpriseCallCenterCurrentAndPastDNISGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterCurrentAndPastDNISGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterEnhancedReportingBrandingGetRequest $request
     * @return EnterpriseCallCenterEnhancedReportingBrandingGetResponse|ErrorResponse
     */
    public function enterpriseCallCenterEnhancedReportingBrandingGetRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingBrandingGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterEnhancedReportingBrandingModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function enterpriseCallCenterEnhancedReportingBrandingModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingBrandingModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterEnhancedReportingGetAvailableReportTemplateListRequest $request
     * @return EnterpriseCallCenterEnhancedReportingGetAvailableReportTemplateListResponse|ErrorResponse
     */
    public function enterpriseCallCenterEnhancedReportingGetAvailableReportTemplateListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingGetAvailableReportTemplateListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterEnhancedReportingGetRequest19 $request
     * @return EnterpriseCallCenterEnhancedReportingGetResponse19|ErrorResponse
     */
    public function enterpriseCallCenterEnhancedReportingGetRequest19(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingGetRequest19 $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterEnhancedReportingModifyRequest19 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function enterpriseCallCenterEnhancedReportingModifyRequest19(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingModifyRequest19 $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterEnhancedReportingReportTemplateAddRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function enterpriseCallCenterEnhancedReportingReportTemplateAddRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingReportTemplateAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterEnhancedReportingReportTemplateDeleteRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function enterpriseCallCenterEnhancedReportingReportTemplateDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingReportTemplateDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterEnhancedReportingReportTemplateGetListRequest $request
     * @return EnterpriseCallCenterEnhancedReportingReportTemplateGetListResponse|ErrorResponse
     */
    public function enterpriseCallCenterEnhancedReportingReportTemplateGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingReportTemplateGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterEnhancedReportingReportTemplateGetRequest $request
     * @return EnterpriseCallCenterEnhancedReportingReportTemplateGetResponse|ErrorResponse
     */
    public function enterpriseCallCenterEnhancedReportingReportTemplateGetRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingReportTemplateGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterEnhancedReportingReportTemplateModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function enterpriseCallCenterEnhancedReportingReportTemplateModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingReportTemplateModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterEnhancedReportingScheduledReportAddRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function enterpriseCallCenterEnhancedReportingScheduledReportAddRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingScheduledReportAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterEnhancedReportingScheduledReportDeleteRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function enterpriseCallCenterEnhancedReportingScheduledReportDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingScheduledReportDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterEnhancedReportingScheduledReportGetActiveListRequest $request
     * @return EnterpriseCallCenterEnhancedReportingScheduledReportGetActiveListResponse|ErrorResponse
     */
    public function enterpriseCallCenterEnhancedReportingScheduledReportGetActiveListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingScheduledReportGetActiveListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterEnhancedReportingScheduledReportGetCompletedListRequest $request
     * @return EnterpriseCallCenterEnhancedReportingScheduledReportGetCompletedListResponse|ErrorResponse
     */
    public function enterpriseCallCenterEnhancedReportingScheduledReportGetCompletedListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingScheduledReportGetCompletedListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterEnhancedReportingScheduledReportGetListRequest $request
     * @return EnterpriseCallCenterEnhancedReportingScheduledReportGetListResponse|ErrorResponse
     */
    public function enterpriseCallCenterEnhancedReportingScheduledReportGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingScheduledReportGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListRequest $request
     * @return EnterpriseCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListResponse|ErrorResponse
     */
    public function enterpriseCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterEnhancedReportingScheduledReportGetRequest $request
     * @return EnterpriseCallCenterEnhancedReportingScheduledReportGetResponse|ErrorResponse
     */
    public function enterpriseCallCenterEnhancedReportingScheduledReportGetRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingScheduledReportGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterEnhancedReportingScheduledReportModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function enterpriseCallCenterEnhancedReportingScheduledReportModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingScheduledReportModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterGetRequest17sp4 $request
     * @return EnterpriseCallCenterGetResponse17sp4
     */
    public function enterpriseCallCenterGetRequest17sp4(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterGetRequest17sp4 $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterGetRoutingPolicyRequest $request
     * @return EnterpriseCallCenterGetRoutingPolicyResponse
     */
    public function enterpriseCallCenterGetRoutingPolicyRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterGetRoutingPolicyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function enterpriseCallCenterModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterModifyRoutingPolicyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function enterpriseCallCenterModifyRoutingPolicyRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterModifyRoutingPolicyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterAddAgentListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCallCenterAddAgentListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAddAgentListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterAddDNISRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCallCenterAddDNISRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAddDNISRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterAddInstanceRequest22 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCallCenterAddInstanceRequest22(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAddInstanceRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterAddSupervisorListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCallCenterAddSupervisorListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAddSupervisorListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterAgentThresholdDefaultProfileGetRequest $request
     * @return GroupCallCenterAgentThresholdDefaultProfileGetResponse|ErrorResponse
     */
    public function groupCallCenterAgentThresholdDefaultProfileGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentThresholdDefaultProfileGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterAgentThresholdProfileAddAgentListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCallCenterAgentThresholdProfileAddAgentListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentThresholdProfileAddAgentListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterAgentThresholdProfileAddRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCallCenterAgentThresholdProfileAddRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentThresholdProfileAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterAgentThresholdProfileDeleteAgentListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCallCenterAgentThresholdProfileDeleteAgentListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentThresholdProfileDeleteAgentListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterAgentThresholdProfileDeleteRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCallCenterAgentThresholdProfileDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentThresholdProfileDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterAgentThresholdProfileGetAvailableAgentListRequest $request
     * @return GroupCallCenterAgentThresholdProfileGetAvailableAgentListResponse|ErrorResponse
     */
    public function groupCallCenterAgentThresholdProfileGetAvailableAgentListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentThresholdProfileGetAvailableAgentListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterAgentThresholdProfileGetListRequest $request
     * @return GroupCallCenterAgentThresholdProfileGetListResponse|ErrorResponse
     */
    public function groupCallCenterAgentThresholdProfileGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentThresholdProfileGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterAgentThresholdProfileGetRequest $request
     * @return GroupCallCenterAgentThresholdProfileGetResponse|ErrorResponse
     */
    public function groupCallCenterAgentThresholdProfileGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentThresholdProfileGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterAgentThresholdProfileModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCallCenterAgentThresholdProfileModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentThresholdProfileModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterAgentUnavailableCodeAddRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCallCenterAgentUnavailableCodeAddRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentUnavailableCodeAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterAgentUnavailableCodeDeleteRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCallCenterAgentUnavailableCodeDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentUnavailableCodeDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterAgentUnavailableCodeGetListRequest $request
     * @return GroupCallCenterAgentUnavailableCodeGetListResponse|ErrorResponse
     */
    public function groupCallCenterAgentUnavailableCodeGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentUnavailableCodeGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterAgentUnavailableCodeGetRequest $request
     * @return GroupCallCenterAgentUnavailableCodeGetResponse|ErrorResponse
     */
    public function groupCallCenterAgentUnavailableCodeGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentUnavailableCodeGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterAgentUnavailableCodeModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCallCenterAgentUnavailableCodeModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentUnavailableCodeModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterAgentUnavailableCodeSettingsGetRequest17sp4 $request
     * @return GroupCallCenterAgentUnavailableCodeSettingsGetResponse17sp4
     */
    public function groupCallCenterAgentUnavailableCodeSettingsGetRequest17sp4(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentUnavailableCodeSettingsGetRequest17sp4 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterAgentUnavailableCodeSettingsModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCallCenterAgentUnavailableCodeSettingsModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentUnavailableCodeSettingsModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterBouncedCallGetRequest17 $request
     * @return GroupCallCenterBouncedCallGetResponse17|ErrorResponse
     */
    public function groupCallCenterBouncedCallGetRequest17(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterBouncedCallGetRequest17 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterBouncedCallModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCallCenterBouncedCallModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterBouncedCallModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterCallDispositionCodeAddRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCallCenterCallDispositionCodeAddRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterCallDispositionCodeAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterCallDispositionCodeDeleteRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCallCenterCallDispositionCodeDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterCallDispositionCodeDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterCallDispositionCodeGetListRequest $request
     * @return GroupCallCenterCallDispositionCodeGetListResponse|ErrorResponse
     */
    public function groupCallCenterCallDispositionCodeGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterCallDispositionCodeGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterCallDispositionCodeGetRequest $request
     * @return GroupCallCenterCallDispositionCodeGetResponse|ErrorResponse
     */
    public function groupCallCenterCallDispositionCodeGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterCallDispositionCodeGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterCallDispositionCodeGetUsageListRequest $request
     * @return GroupCallCenterCallDispositionCodeGetUsageListResponse|ErrorResponse
     */
    public function groupCallCenterCallDispositionCodeGetUsageListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterCallDispositionCodeGetUsageListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterCallDispositionCodeModifyActiveListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCallCenterCallDispositionCodeModifyActiveListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterCallDispositionCodeModifyActiveListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterCallDispositionCodeModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCallCenterCallDispositionCodeModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterCallDispositionCodeModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterComfortMessageBypassGetRequest20 $request
     * @return GroupCallCenterComfortMessageBypassGetResponse20|ErrorResponse
     */
    public function groupCallCenterComfortMessageBypassGetRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterComfortMessageBypassGetRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterComfortMessageBypassModifyRequest20 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCallCenterComfortMessageBypassModifyRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterComfortMessageBypassModifyRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterCurrentAndPastAgentGetListRequest $request
     * @return GroupCallCenterCurrentAndPastAgentGetListResponse|ErrorResponse
     */
    public function groupCallCenterCurrentAndPastAgentGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterCurrentAndPastAgentGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterCurrentAndPastCallCenterGetListRequest $request
     * @return GroupCallCenterCurrentAndPastCallCenterGetListResponse|ErrorResponse
     */
    public function groupCallCenterCurrentAndPastCallCenterGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterCurrentAndPastCallCenterGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterCurrentAndPastDNISGetListRequest $request
     * @return GroupCallCenterCurrentAndPastDNISGetListResponse|ErrorResponse
     */
    public function groupCallCenterCurrentAndPastDNISGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterCurrentAndPastDNISGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterDeleteAgentListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCallCenterDeleteAgentListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterDeleteAgentListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterDeleteDNISRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCallCenterDeleteDNISRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterDeleteDNISRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterDeleteInstanceRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCallCenterDeleteInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterDeleteInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterDeleteSupervisorListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCallCenterDeleteSupervisorListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterDeleteSupervisorListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterDistinctiveRingingGetRequest $request
     * @return GroupCallCenterDistinctiveRingingGetResponse
     */
    public function groupCallCenterDistinctiveRingingGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterDistinctiveRingingGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterDistinctiveRingingModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCallCenterDistinctiveRingingModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterDistinctiveRingingModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterEnhancedReportingBrandingGetRequest $request
     * @return GroupCallCenterEnhancedReportingBrandingGetResponse|ErrorResponse
     */
    public function groupCallCenterEnhancedReportingBrandingGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingBrandingGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterEnhancedReportingBrandingModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCallCenterEnhancedReportingBrandingModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingBrandingModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterEnhancedReportingGetAvailableReportTemplateListRequest $request
     * @return GroupCallCenterEnhancedReportingGetAvailableReportTemplateListResponse|ErrorResponse
     */
    public function groupCallCenterEnhancedReportingGetAvailableReportTemplateListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingGetAvailableReportTemplateListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterEnhancedReportingGetRequest19 $request
     * @return GroupCallCenterEnhancedReportingGetResponse19|ErrorResponse
     */
    public function groupCallCenterEnhancedReportingGetRequest19(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingGetRequest19 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterEnhancedReportingModifyRequest19 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCallCenterEnhancedReportingModifyRequest19(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingModifyRequest19 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterEnhancedReportingReportTemplateAddRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCallCenterEnhancedReportingReportTemplateAddRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingReportTemplateAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterEnhancedReportingReportTemplateDeleteRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCallCenterEnhancedReportingReportTemplateDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingReportTemplateDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterEnhancedReportingReportTemplateGetListRequest $request
     * @return GroupCallCenterEnhancedReportingReportTemplateGetListResponse|ErrorResponse
     */
    public function groupCallCenterEnhancedReportingReportTemplateGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingReportTemplateGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterEnhancedReportingReportTemplateGetRequest $request
     * @return GroupCallCenterEnhancedReportingReportTemplateGetResponse|ErrorResponse
     */
    public function groupCallCenterEnhancedReportingReportTemplateGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingReportTemplateGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterEnhancedReportingReportTemplateModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCallCenterEnhancedReportingReportTemplateModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingReportTemplateModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterEnhancedReportingScheduledReportAddRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCallCenterEnhancedReportingScheduledReportAddRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingScheduledReportAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterEnhancedReportingScheduledReportDeleteRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCallCenterEnhancedReportingScheduledReportDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingScheduledReportDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterEnhancedReportingScheduledReportGetActiveListRequest $request
     * @return GroupCallCenterEnhancedReportingScheduledReportGetActiveListResponse|ErrorResponse
     */
    public function groupCallCenterEnhancedReportingScheduledReportGetActiveListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingScheduledReportGetActiveListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterEnhancedReportingScheduledReportGetCompletedListRequest $request
     * @return GroupCallCenterEnhancedReportingScheduledReportGetCompletedListResponse|ErrorResponse
     */
    public function groupCallCenterEnhancedReportingScheduledReportGetCompletedListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingScheduledReportGetCompletedListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterEnhancedReportingScheduledReportGetListRequest $request
     * @return GroupCallCenterEnhancedReportingScheduledReportGetListResponse|ErrorResponse
     */
    public function groupCallCenterEnhancedReportingScheduledReportGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingScheduledReportGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListRequest $request
     * @return GroupCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListResponse|ErrorResponse
     */
    public function groupCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterEnhancedReportingScheduledReportGetRequest $request
     * @return GroupCallCenterEnhancedReportingScheduledReportGetResponse|ErrorResponse
     */
    public function groupCallCenterEnhancedReportingScheduledReportGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingScheduledReportGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterEnhancedReportingScheduledReportModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCallCenterEnhancedReportingScheduledReportModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingScheduledReportModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterForcedForwardingGetRequest20 $request
     * @return GroupCallCenterForcedForwardingGetResponse20|ErrorResponse
     */
    public function groupCallCenterForcedForwardingGetRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterForcedForwardingGetRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterForcedForwardingModifyRequest20 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCallCenterForcedForwardingModifyRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterForcedForwardingModifyRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterGetAgentListRequest $request
     * @return
     */
    public function groupCallCenterGetAgentListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetAgentListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterGetAnnouncementRequest20 $request
     * @return GroupCallCenterGetAnnouncementResponse20|ErrorResponse
     */
    public function groupCallCenterGetAnnouncementRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetAnnouncementRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterGetAvailableAgentListRequest $request
     * @return GroupCallCenterGetAvailableAgentListResponse|ErrorResponse
     */
    public function groupCallCenterGetAvailableAgentListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetAvailableAgentListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterGetAvailableSupervisorListRequest $request
     * @return GroupCallCenterGetAvailableSupervisorListResponse|ErrorResponse
     */
    public function groupCallCenterGetAvailableSupervisorListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetAvailableSupervisorListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterGetDistinctiveRingingRequest $request
     * @return GroupCallCenterGetDistinctiveRingingResponse
     */
    public function groupCallCenterGetDistinctiveRingingRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetDistinctiveRingingRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterGetDNISAgentListRequest $request
     * @return GroupCallCenterGetDNISAgentListResponse|ErrorResponse
     */
    public function groupCallCenterGetDNISAgentListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetDNISAgentListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterGetDNISAnnouncementRequest20 $request
     * @return ErrorResponse
     */
    public function groupCallCenterGetDNISAnnouncementRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetDNISAnnouncementRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterGetDNISListRequest $request
     * @return GroupCallCenterGetDNISListResponse|ErrorResponse
     */
    public function groupCallCenterGetDNISListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetDNISListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterGetDNISRequest $request
     * @return ErrorResponse
     */
    public function groupCallCenterGetDNISRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetDNISRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterGetInstanceListRequest $request
     * @return GroupCallCenterGetInstanceListResponse|ErrorResponse
     */
    public function groupCallCenterGetInstanceListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetInstanceListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterGetInstanceQueueStatusRequest $request
     * @return GroupCallCenterGetInstanceQueueStatusResponse|ErrorResponse
     */
    public function groupCallCenterGetInstanceQueueStatusRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetInstanceQueueStatusRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterGetInstanceRequest22 $request
     * @return GroupCallCenterGetInstanceResponse22|ErrorResponse
     */
    public function groupCallCenterGetInstanceRequest22(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetInstanceRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterGetInstanceStatisticsReportingRequest17sp1 $request
     * @return GroupCallCenterGetInstanceStatisticsReportingResponse17sp1|ErrorResponse
     */
    public function groupCallCenterGetInstanceStatisticsReportingRequest17sp1(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetInstanceStatisticsReportingRequest17sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterGetInstanceStatisticsRequest14sp9 $request
     * @return GroupCallCenterGetInstanceStatisticsResponse14sp9|ErrorResponse
     */
    public function groupCallCenterGetInstanceStatisticsRequest14sp9(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetInstanceStatisticsRequest14sp9 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterGetRequest17sp4 $request
     * @return GroupCallCenterGetResponse17sp4
     */
    public function groupCallCenterGetRequest17sp4(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetRequest17sp4 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterGetRoutingPolicyRequest $request
     * @return GroupCallCenterGetRoutingPolicyResponse
     */
    public function groupCallCenterGetRoutingPolicyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetRoutingPolicyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterGetSupervisorListRequest16 $request
     * @return
     */
    public function groupCallCenterGetSupervisorListRequest16(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetSupervisorListRequest16 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterGetUnlicensedAgentListRequest $request
     * @return ErrorResponse
     */
    public function groupCallCenterGetUnlicensedAgentListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetUnlicensedAgentListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterHolidayServiceGetRequest20 $request
     * @return GroupCallCenterHolidayServiceGetResponse20|ErrorResponse
     */
    public function groupCallCenterHolidayServiceGetRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterHolidayServiceGetRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterHolidayServiceModifyRequest20 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCallCenterHolidayServiceModifyRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterHolidayServiceModifyRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterModifyActiveInstanceListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCallCenterModifyActiveInstanceListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterModifyActiveInstanceListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterModifyAgentListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCallCenterModifyAgentListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterModifyAgentListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterModifyAnnouncementRequest20 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCallCenterModifyAnnouncementRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterModifyAnnouncementRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterModifyDistinctiveRingingRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCallCenterModifyDistinctiveRingingRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterModifyDistinctiveRingingRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterModifyDNISAnnouncementRequest20 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCallCenterModifyDNISAnnouncementRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterModifyDNISAnnouncementRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterModifyDNISParametersRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCallCenterModifyDNISParametersRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterModifyDNISParametersRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterModifyDNISRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCallCenterModifyDNISRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterModifyDNISRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterModifyInstanceRequest22 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCallCenterModifyInstanceRequest22(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterModifyInstanceRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterModifyInstanceStatisticsReportingRequest17sp1 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCallCenterModifyInstanceStatisticsReportingRequest17sp1(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterModifyInstanceStatisticsReportingRequest17sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterModifyInstanceWeightedCallDistributionRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCallCenterModifyInstanceWeightedCallDistributionRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterModifyInstanceWeightedCallDistributionRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCallCenterModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterModifyRoutingPolicyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCallCenterModifyRoutingPolicyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterModifyRoutingPolicyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterModifySupervisorListRequest16 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCallCenterModifySupervisorListRequest16(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterModifySupervisorListRequest16 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterNightServiceGetRequest20 $request
     * @return GroupCallCenterNightServiceGetResponse20|ErrorResponse
     */
    public function groupCallCenterNightServiceGetRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterNightServiceGetRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterNightServiceModifyRequest20 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCallCenterNightServiceModifyRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterNightServiceModifyRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterOverflowGetRequest20 $request
     * @return GroupCallCenterOverflowGetResponse20|ErrorResponse
     */
    public function groupCallCenterOverflowGetRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterOverflowGetRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterOverflowModifyRequest20 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCallCenterOverflowModifyRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterOverflowModifyRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterQueueCallDispositionCodeAddRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCallCenterQueueCallDispositionCodeAddRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterQueueCallDispositionCodeAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterQueueCallDispositionCodeDeleteRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCallCenterQueueCallDispositionCodeDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterQueueCallDispositionCodeDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterQueueCallDispositionCodeGetListRequest $request
     * @return GroupCallCenterQueueCallDispositionCodeGetListResponse|ErrorResponse
     */
    public function groupCallCenterQueueCallDispositionCodeGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterQueueCallDispositionCodeGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterQueueCallDispositionCodeGetRequest $request
     * @return GroupCallCenterQueueCallDispositionCodeGetResponse|ErrorResponse
     */
    public function groupCallCenterQueueCallDispositionCodeGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterQueueCallDispositionCodeGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterQueueCallDispositionCodeModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCallCenterQueueCallDispositionCodeModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterQueueCallDispositionCodeModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterQueueCallDispositionCodeSettingsGetRequest $request
     * @return GroupCallCenterQueueCallDispositionCodeSettingsGetResponse
     */
    public function groupCallCenterQueueCallDispositionCodeSettingsGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterQueueCallDispositionCodeSettingsGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterQueueCallDispositionCodeSettingsModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCallCenterQueueCallDispositionCodeSettingsModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterQueueCallDispositionCodeSettingsModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterQueueStatusNotificationGetRequest $request
     * @return GroupCallCenterQueueStatusNotificationGetResponse|ErrorResponse
     */
    public function groupCallCenterQueueStatusNotificationGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterQueueStatusNotificationGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterQueueStatusNotificationModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCallCenterQueueStatusNotificationModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterQueueStatusNotificationModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterQueueThresholdsGetRequest $request
     * @return ErrorResponse
     */
    public function groupCallCenterQueueThresholdsGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterQueueThresholdsGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterQueueThresholdsModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCallCenterQueueThresholdsModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterQueueThresholdsModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterStrandedCallGetRequest20 $request
     * @return GroupCallCenterStrandedCallGetResponse20|ErrorResponse
     */
    public function groupCallCenterStrandedCallGetRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterStrandedCallGetRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterStrandedCallModifyRequest20 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCallCenterStrandedCallModifyRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterStrandedCallModifyRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterStrandedCallUnavailableGetRequest20 $request
     * @return GroupCallCenterStrandedCallUnavailableGetResponse|ErrorResponse
     */
    public function groupCallCenterStrandedCallUnavailableGetRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterStrandedCallUnavailableGetRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterStrandedCallUnavailableModifyRequest20 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCallCenterStrandedCallUnavailableModifyRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterStrandedCallUnavailableModifyRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCallCenterEnhancedReportingBrandingGetRequest $request
     * @return SystemCallCenterEnhancedReportingBrandingGetResponse|ErrorResponse
     */
    public function systemCallCenterEnhancedReportingBrandingGetRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingBrandingGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCallCenterEnhancedReportingBrandingModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function systemCallCenterEnhancedReportingBrandingModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingBrandingModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCallCenterEnhancedReportingDataTemplateGetListRequest $request
     * @return SystemCallCenterEnhancedReportingDataTemplateGetListResponse|ErrorResponse
     */
    public function systemCallCenterEnhancedReportingDataTemplateGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingDataTemplateGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCallCenterEnhancedReportingGetRequest $request
     * @return SystemCallCenterEnhancedReportingGetResponse|ErrorResponse
     */
    public function systemCallCenterEnhancedReportingGetRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCallCenterEnhancedReportingModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function systemCallCenterEnhancedReportingModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCallCenterEnhancedReportingReportTemplateAddRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function systemCallCenterEnhancedReportingReportTemplateAddRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingReportTemplateAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCallCenterEnhancedReportingReportTemplateDeleteRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function systemCallCenterEnhancedReportingReportTemplateDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingReportTemplateDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCallCenterEnhancedReportingReportTemplateGetListRequest $request
     * @return SystemCallCenterEnhancedReportingReportTemplateGetListResponse|ErrorResponse
     */
    public function systemCallCenterEnhancedReportingReportTemplateGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingReportTemplateGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCallCenterEnhancedReportingReportTemplateGetRequest $request
     * @return SystemCallCenterEnhancedReportingReportTemplateGetResponse|ErrorResponse
     */
    public function systemCallCenterEnhancedReportingReportTemplateGetRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingReportTemplateGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCallCenterEnhancedReportingReportTemplateModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function systemCallCenterEnhancedReportingReportTemplateModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingReportTemplateModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCallCenterEnhancedReportingScheduledReportGetActiveListRequest $request
     * @return SystemCallCenterEnhancedReportingScheduledReportGetActiveListResponse|ErrorResponse
     */
    public function systemCallCenterEnhancedReportingScheduledReportGetActiveListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingScheduledReportGetActiveListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCallCenterEnhancedReportingScheduledReportGetCompletedListRequest $request
     * @return SystemCallCenterEnhancedReportingScheduledReportGetCompletedListResponse|ErrorResponse
     */
    public function systemCallCenterEnhancedReportingScheduledReportGetCompletedListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingScheduledReportGetCompletedListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCallCenterEnhancedReportingScheduledReportGetListRequest $request
     * @return SystemCallCenterEnhancedReportingScheduledReportGetListResponse|ErrorResponse
     */
    public function systemCallCenterEnhancedReportingScheduledReportGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingScheduledReportGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListRequest $request
     * @return SystemCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListResponse
     */
    public function systemCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCallCenterEnhancedReportingScheduledTaskParametersGetRequest $request
     * @return SystemCallCenterEnhancedReportingScheduledTaskParametersGetResponse|ErrorResponse
     */
    public function systemCallCenterEnhancedReportingScheduledTaskParametersGetRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingScheduledTaskParametersGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCallCenterEnhancedReportingScheduledTaskParametersModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function systemCallCenterEnhancedReportingScheduledTaskParametersModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingScheduledTaskParametersModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCallCenterGetRequest21 $request
     * @return SystemCallCenterGetResponse21
     */
    public function systemCallCenterGetRequest21(\CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterGetRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCallCenterModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function systemCallCenterModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallCenterAddSupervisedAgentListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userCallCenterAddSupervisedAgentListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallCenterAddSupervisedAgentListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallCenterAgentDetailsGetRequest $request
     * @return UserCallCenterAgentDetailsGetResponse|ErrorResponse
     */
    public function userCallCenterAgentDetailsGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallCenterAgentDetailsGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallCenterAgentSignOutRequest $request
     * @return UserCallCenterAgentSignOutResponse|ErrorResponse
     */
    public function userCallCenterAgentSignOutRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallCenterAgentSignOutRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallCenterCallDispositionCodeGetAvailableListRequest $request
     * @return UserCallCenterCallDispositionCodeGetAvailableListResponse|ErrorResponse
     */
    public function userCallCenterCallDispositionCodeGetAvailableListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallCenterCallDispositionCodeGetAvailableListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallCenterDeleteSupervisedAgentListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userCallCenterDeleteSupervisedAgentListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallCenterDeleteSupervisedAgentListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallCenterEnhancedReportingReportTemplateParamInfoGetRequest $request
     * @return UserCallCenterEnhancedReportingReportTemplateParamInfoGetResponse|ErrorResponse
     */
    public function userCallCenterEnhancedReportingReportTemplateParamInfoGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallCenterEnhancedReportingReportTemplateParamInfoGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallCenterEnhancedReportingScheduledReportDeleteRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userCallCenterEnhancedReportingScheduledReportDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallCenterEnhancedReportingScheduledReportDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallCenterEnhancedReportingScheduledReportGetRequest $request
     * @return UserCallCenterEnhancedReportingScheduledReportGetResponse|ErrorResponse
     */
    public function userCallCenterEnhancedReportingScheduledReportGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallCenterEnhancedReportingScheduledReportGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallCenterEnhancedReportingScheduledReportModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userCallCenterEnhancedReportingScheduledReportModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallCenterEnhancedReportingScheduledReportModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallCenterGetAgentSupervisorListRequest $request
     * @return UserCallCenterGetAgentSupervisorListResponse
     */
    public function userCallCenterGetAgentSupervisorListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallCenterGetAgentSupervisorListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallCenterGetAvailableCallCenterListRequest $request
     * @return UserCallCenterGetAvailableCallCenterListResponse|ErrorResponse
     */
    public function userCallCenterGetAvailableCallCenterListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallCenterGetAvailableCallCenterListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallCenterGetAvailableDNISListRequest $request
     * @return UserCallCenterGetAvailableDNISListResponse|ErrorResponse
     */
    public function userCallCenterGetAvailableDNISListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallCenterGetAvailableDNISListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallCenterGetRequest19 $request
     * @return UserCallCenterGetResponse19|ErrorResponse
     */
    public function userCallCenterGetRequest19(\CWM\BroadWorksConnector\Ocip\Models\UserCallCenterGetRequest19 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallCenterGetSupervisedAgentListRequest $request
     * @return UserCallCenterGetSupervisedAgentListResponse
     */
    public function userCallCenterGetSupervisedAgentListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallCenterGetSupervisedAgentListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallCenterGetSupervisorCallCenterListRequest $request
     * @return UserCallCenterGetSupervisorCallCenterListResponse
     */
    public function userCallCenterGetSupervisorCallCenterListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallCenterGetSupervisorCallCenterListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallCenterModifyCallCenterListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userCallCenterModifyCallCenterListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallCenterModifyCallCenterListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallCenterModifyRequest19 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userCallCenterModifyRequest19(\CWM\BroadWorksConnector\Ocip\Models\UserCallCenterModifyRequest19 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallCenterModifySupervisedAgentListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userCallCenterModifySupervisedAgentListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallCenterModifySupervisedAgentListRequest $request)
    {
        return $this->call($request);
    }


}
