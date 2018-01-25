<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupEmergencyZonesModifyRequest
 *
 * Modify the group level data associated with Emergency Zones.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupEmergencyZonesModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName isActive
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName emergencyZonesProhibition
     * @var string|null
     */
    private $emergencyZonesProhibition = null;

    /**
     * @ElementName sendEmergencyCallNotifyEmail
     * @var bool|null
     */
    private $sendEmergencyCallNotifyEmail = null;

    /**
     * @ElementName emergencyCallNotifyEmailAddress
     * @var string|null
     */
    private $emergencyCallNotifyEmailAddress = null;

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @ElementName groupId
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @ElementName groupId
     * @param string|null $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * Getter for isActive
     *
     * @ElementName isActive
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @ElementName isActive
     * @param bool|null $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * Getter for emergencyZonesProhibition
     *
     * @ElementName emergencyZonesProhibition
     * @return string|null
     */
    public function getEmergencyZonesProhibition()
    {
        return $this->emergencyZonesProhibition;
    }

    /**
     * Setter for emergencyZonesProhibition
     *
     * @ElementName emergencyZonesProhibition
     * @param string|null $emergencyZonesProhibition
     * @return $this
     */
    public function setEmergencyZonesProhibition($emergencyZonesProhibition)
    {
        $this->emergencyZonesProhibition = $emergencyZonesProhibition;
        return $this;
    }

    /**
     * Getter for sendEmergencyCallNotifyEmail
     *
     * @ElementName sendEmergencyCallNotifyEmail
     * @return bool|null
     */
    public function getSendEmergencyCallNotifyEmail()
    {
        return $this->sendEmergencyCallNotifyEmail;
    }

    /**
     * Setter for sendEmergencyCallNotifyEmail
     *
     * @ElementName sendEmergencyCallNotifyEmail
     * @param bool|null $sendEmergencyCallNotifyEmail
     * @return $this
     */
    public function setSendEmergencyCallNotifyEmail($sendEmergencyCallNotifyEmail)
    {
        $this->sendEmergencyCallNotifyEmail = $sendEmergencyCallNotifyEmail;
        return $this;
    }

    /**
     * Getter for emergencyCallNotifyEmailAddress
     *
     * @ElementName emergencyCallNotifyEmailAddress
     * @return string|null
     */
    public function getEmergencyCallNotifyEmailAddress()
    {
        return $this->emergencyCallNotifyEmailAddress;
    }

    /**
     * Setter for emergencyCallNotifyEmailAddress
     *
     * @ElementName emergencyCallNotifyEmailAddress
     * @param string|null $emergencyCallNotifyEmailAddress
     * @return $this
     */
    public function setEmergencyCallNotifyEmailAddress($emergencyCallNotifyEmailAddress)
    {
        $this->emergencyCallNotifyEmailAddress = $emergencyCallNotifyEmailAddress;
        return $this;
    }


}
