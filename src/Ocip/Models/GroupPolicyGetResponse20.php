<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupPolicyGetResponse20
 *
 * Response to GroupPolicyGetRequest20.
 *           Contains the policy settings for the group.
 *           
 *           Replaced by: GroupPolicyGetResponse22 in AS data mode
 */
class GroupPolicyGetResponse20 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName callingPlanAccess
     * @var string|null
     */
    private $callingPlanAccess = null;

    /**
     * @ElementName extensionAccess
     * @var string|null
     */
    private $extensionAccess = null;

    /**
     * @ElementName ldapIntegrationAccess
     * @var string|null
     */
    private $ldapIntegrationAccess = null;

    /**
     * @ElementName voiceMessagingAccess
     * @var string|null
     */
    private $voiceMessagingAccess = null;

    /**
     * @ElementName departmentAdminUserAccess
     * @var string|null
     */
    private $departmentAdminUserAccess = null;

    /**
     * @ElementName departmentAdminTrunkGroupAccess
     * @var string|null
     */
    private $departmentAdminTrunkGroupAccess = null;

    /**
     * @ElementName departmentAdminPhoneNumberExtensionAccess
     * @var string|null
     */
    private $departmentAdminPhoneNumberExtensionAccess = null;

    /**
     * @ElementName departmentAdminCallingLineIdNumberAccess
     * @var string|null
     */
    private $departmentAdminCallingLineIdNumberAccess = null;

    /**
     * @ElementName userAuthenticationAccess
     * @var string|null
     */
    private $userAuthenticationAccess = null;

    /**
     * @ElementName userGroupDirectoryAccess
     * @var string|null
     */
    private $userGroupDirectoryAccess = null;

    /**
     * @ElementName userProfileAccess
     * @var string|null
     */
    private $userProfileAccess = null;

    /**
     * @ElementName userEnhancedCallLogAccess
     * @var string|null
     */
    private $userEnhancedCallLogAccess = null;

    /**
     * @ElementName userAutoAttendantNameDialingAccess
     * @var string|null
     */
    private $userAutoAttendantNameDialingAccess = null;

    /**
     * Getter for callingPlanAccess
     *
     * @ElementName callingPlanAccess
     * @return string|null
     */
    public function getCallingPlanAccess()
    {
        return $this->callingPlanAccess;
    }

    /**
     * Setter for callingPlanAccess
     *
     * @ElementName callingPlanAccess
     * @param string|null $callingPlanAccess
     * @return $this
     */
    public function setCallingPlanAccess($callingPlanAccess)
    {
        $this->callingPlanAccess = $callingPlanAccess;
        return $this;
    }

    /**
     * Getter for extensionAccess
     *
     * @ElementName extensionAccess
     * @return string|null
     */
    public function getExtensionAccess()
    {
        return $this->extensionAccess;
    }

    /**
     * Setter for extensionAccess
     *
     * @ElementName extensionAccess
     * @param string|null $extensionAccess
     * @return $this
     */
    public function setExtensionAccess($extensionAccess)
    {
        $this->extensionAccess = $extensionAccess;
        return $this;
    }

    /**
     * Getter for ldapIntegrationAccess
     *
     * @ElementName ldapIntegrationAccess
     * @return string|null
     */
    public function getLdapIntegrationAccess()
    {
        return $this->ldapIntegrationAccess;
    }

    /**
     * Setter for ldapIntegrationAccess
     *
     * @ElementName ldapIntegrationAccess
     * @param string|null $ldapIntegrationAccess
     * @return $this
     */
    public function setLdapIntegrationAccess($ldapIntegrationAccess)
    {
        $this->ldapIntegrationAccess = $ldapIntegrationAccess;
        return $this;
    }

    /**
     * Getter for voiceMessagingAccess
     *
     * @ElementName voiceMessagingAccess
     * @return string|null
     */
    public function getVoiceMessagingAccess()
    {
        return $this->voiceMessagingAccess;
    }

    /**
     * Setter for voiceMessagingAccess
     *
     * @ElementName voiceMessagingAccess
     * @param string|null $voiceMessagingAccess
     * @return $this
     */
    public function setVoiceMessagingAccess($voiceMessagingAccess)
    {
        $this->voiceMessagingAccess = $voiceMessagingAccess;
        return $this;
    }

    /**
     * Getter for departmentAdminUserAccess
     *
     * @ElementName departmentAdminUserAccess
     * @return string|null
     */
    public function getDepartmentAdminUserAccess()
    {
        return $this->departmentAdminUserAccess;
    }

    /**
     * Setter for departmentAdminUserAccess
     *
     * @ElementName departmentAdminUserAccess
     * @param string|null $departmentAdminUserAccess
     * @return $this
     */
    public function setDepartmentAdminUserAccess($departmentAdminUserAccess)
    {
        $this->departmentAdminUserAccess = $departmentAdminUserAccess;
        return $this;
    }

    /**
     * Getter for departmentAdminTrunkGroupAccess
     *
     * @ElementName departmentAdminTrunkGroupAccess
     * @return string|null
     */
    public function getDepartmentAdminTrunkGroupAccess()
    {
        return $this->departmentAdminTrunkGroupAccess;
    }

    /**
     * Setter for departmentAdminTrunkGroupAccess
     *
     * @ElementName departmentAdminTrunkGroupAccess
     * @param string|null $departmentAdminTrunkGroupAccess
     * @return $this
     */
    public function setDepartmentAdminTrunkGroupAccess($departmentAdminTrunkGroupAccess)
    {
        $this->departmentAdminTrunkGroupAccess = $departmentAdminTrunkGroupAccess;
        return $this;
    }

    /**
     * Getter for departmentAdminPhoneNumberExtensionAccess
     *
     * @ElementName departmentAdminPhoneNumberExtensionAccess
     * @return string|null
     */
    public function getDepartmentAdminPhoneNumberExtensionAccess()
    {
        return $this->departmentAdminPhoneNumberExtensionAccess;
    }

    /**
     * Setter for departmentAdminPhoneNumberExtensionAccess
     *
     * @ElementName departmentAdminPhoneNumberExtensionAccess
     * @param string|null $departmentAdminPhoneNumberExtensionAccess
     * @return $this
     */
    public function setDepartmentAdminPhoneNumberExtensionAccess($departmentAdminPhoneNumberExtensionAccess)
    {
        $this->departmentAdminPhoneNumberExtensionAccess = $departmentAdminPhoneNumberExtensionAccess;
        return $this;
    }

    /**
     * Getter for departmentAdminCallingLineIdNumberAccess
     *
     * @ElementName departmentAdminCallingLineIdNumberAccess
     * @return string|null
     */
    public function getDepartmentAdminCallingLineIdNumberAccess()
    {
        return $this->departmentAdminCallingLineIdNumberAccess;
    }

    /**
     * Setter for departmentAdminCallingLineIdNumberAccess
     *
     * @ElementName departmentAdminCallingLineIdNumberAccess
     * @param string|null $departmentAdminCallingLineIdNumberAccess
     * @return $this
     */
    public function setDepartmentAdminCallingLineIdNumberAccess($departmentAdminCallingLineIdNumberAccess)
    {
        $this->departmentAdminCallingLineIdNumberAccess = $departmentAdminCallingLineIdNumberAccess;
        return $this;
    }

    /**
     * Getter for userAuthenticationAccess
     *
     * @ElementName userAuthenticationAccess
     * @return string|null
     */
    public function getUserAuthenticationAccess()
    {
        return $this->userAuthenticationAccess;
    }

    /**
     * Setter for userAuthenticationAccess
     *
     * @ElementName userAuthenticationAccess
     * @param string|null $userAuthenticationAccess
     * @return $this
     */
    public function setUserAuthenticationAccess($userAuthenticationAccess)
    {
        $this->userAuthenticationAccess = $userAuthenticationAccess;
        return $this;
    }

    /**
     * Getter for userGroupDirectoryAccess
     *
     * @ElementName userGroupDirectoryAccess
     * @return string|null
     */
    public function getUserGroupDirectoryAccess()
    {
        return $this->userGroupDirectoryAccess;
    }

    /**
     * Setter for userGroupDirectoryAccess
     *
     * @ElementName userGroupDirectoryAccess
     * @param string|null $userGroupDirectoryAccess
     * @return $this
     */
    public function setUserGroupDirectoryAccess($userGroupDirectoryAccess)
    {
        $this->userGroupDirectoryAccess = $userGroupDirectoryAccess;
        return $this;
    }

    /**
     * Getter for userProfileAccess
     *
     * @ElementName userProfileAccess
     * @return string|null
     */
    public function getUserProfileAccess()
    {
        return $this->userProfileAccess;
    }

    /**
     * Setter for userProfileAccess
     *
     * @ElementName userProfileAccess
     * @param string|null $userProfileAccess
     * @return $this
     */
    public function setUserProfileAccess($userProfileAccess)
    {
        $this->userProfileAccess = $userProfileAccess;
        return $this;
    }

    /**
     * Getter for userEnhancedCallLogAccess
     *
     * @ElementName userEnhancedCallLogAccess
     * @return string|null
     */
    public function getUserEnhancedCallLogAccess()
    {
        return $this->userEnhancedCallLogAccess;
    }

    /**
     * Setter for userEnhancedCallLogAccess
     *
     * @ElementName userEnhancedCallLogAccess
     * @param string|null $userEnhancedCallLogAccess
     * @return $this
     */
    public function setUserEnhancedCallLogAccess($userEnhancedCallLogAccess)
    {
        $this->userEnhancedCallLogAccess = $userEnhancedCallLogAccess;
        return $this;
    }

    /**
     * Getter for userAutoAttendantNameDialingAccess
     *
     * @ElementName userAutoAttendantNameDialingAccess
     * @return string|null
     */
    public function getUserAutoAttendantNameDialingAccess()
    {
        return $this->userAutoAttendantNameDialingAccess;
    }

    /**
     * Setter for userAutoAttendantNameDialingAccess
     *
     * @ElementName userAutoAttendantNameDialingAccess
     * @param string|null $userAutoAttendantNameDialingAccess
     * @return $this
     */
    public function setUserAutoAttendantNameDialingAccess($userAutoAttendantNameDialingAccess)
    {
        $this->userAutoAttendantNameDialingAccess = $userAutoAttendantNameDialingAccess;
        return $this;
    }


}
