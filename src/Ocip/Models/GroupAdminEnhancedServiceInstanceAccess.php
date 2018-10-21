<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAdminEnhancedServiceInstanceAccess
 *
 * Policy for a group administrator's access to enhanced service instances (e.g. -
 * instances of Auto Attendants, Call Capacity Groups,
 *         Conference Bridges, Hunt Groups, Call Centers, Series Completion Groups,
 * etc.).
 *         "Full" indicates full access to enhanced service instances.
 *         "Modify-Only" indicates
 *           1) the group administrator is restricted from adding or removing
 * enhanced service instances, but
 *           2) may modify existing instances.
 *
 * @method static GroupAdminEnhancedServiceInstanceAccess FULL()
 * @method static GroupAdminEnhancedServiceInstanceAccess MODIFY_ONLY()
 * @ValueType string
 */
class GroupAdminEnhancedServiceInstanceAccess extends \MyCLabs\Enum\Enum
{

    const FULL = 'Full';

    const MODIFY_ONLY = 'Modify-Only';


}
