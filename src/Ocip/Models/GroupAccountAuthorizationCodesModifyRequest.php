<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAccountAuthorizationCodesModifyRequest
 *
 * Change the group's account/authorization codes setting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupAccountAuthorizationCodesModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @ElementName codeType
     * @var string|null
     */
    private $codeType = null;

    /**
     * @ElementName numberOfDigits
     * @var int|null
     */
    private $numberOfDigits = null;

    /**
     * @ElementName allowLocalAndTollFreeCalls
     * @var bool|null
     */
    private $allowLocalAndTollFreeCalls = null;

    /**
     * @ElementName mandatoryUsageUserIdList
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null
     */
    private $mandatoryUsageUserIdList = null;

    /**
     * @ElementName optionalUsageUserIdList
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null
     */
    private $optionalUsageUserIdList = null;

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
     * Getter for codeType
     *
     * @ElementName codeType
     * @return string|null
     */
    public function getCodeType()
    {
        return $this->codeType;
    }

    /**
     * Setter for codeType
     *
     * @ElementName codeType
     * @param string|null $codeType
     * @return $this
     */
    public function setCodeType($codeType)
    {
        $this->codeType = $codeType;
        return $this;
    }

    /**
     * Getter for numberOfDigits
     *
     * @ElementName numberOfDigits
     * @return int|null
     */
    public function getNumberOfDigits()
    {
        return $this->numberOfDigits;
    }

    /**
     * Setter for numberOfDigits
     *
     * @ElementName numberOfDigits
     * @param int|null $numberOfDigits
     * @return $this
     */
    public function setNumberOfDigits($numberOfDigits)
    {
        $this->numberOfDigits = $numberOfDigits;
        return $this;
    }

    /**
     * Getter for allowLocalAndTollFreeCalls
     *
     * @ElementName allowLocalAndTollFreeCalls
     * @return bool|null
     */
    public function getAllowLocalAndTollFreeCalls()
    {
        return $this->allowLocalAndTollFreeCalls;
    }

    /**
     * Setter for allowLocalAndTollFreeCalls
     *
     * @ElementName allowLocalAndTollFreeCalls
     * @param bool|null $allowLocalAndTollFreeCalls
     * @return $this
     */
    public function setAllowLocalAndTollFreeCalls($allowLocalAndTollFreeCalls)
    {
        $this->allowLocalAndTollFreeCalls = $allowLocalAndTollFreeCalls;
        return $this;
    }

    /**
     * Getter for mandatoryUsageUserIdList
     *
     * @ElementName mandatoryUsageUserIdList
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null
     */
    public function getMandatoryUsageUserIdList()
    {
        return $this->mandatoryUsageUserIdList;
    }

    /**
     * Setter for mandatoryUsageUserIdList
     *
     * @ElementName mandatoryUsageUserIdList
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null $mandatoryUsageUserIdList
     * @return $this
     */
    public function setMandatoryUsageUserIdList($mandatoryUsageUserIdList)
    {
        $this->mandatoryUsageUserIdList = $mandatoryUsageUserIdList;
        return $this;
    }

    /**
     * Getter for optionalUsageUserIdList
     *
     * @ElementName optionalUsageUserIdList
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null
     */
    public function getOptionalUsageUserIdList()
    {
        return $this->optionalUsageUserIdList;
    }

    /**
     * Setter for optionalUsageUserIdList
     *
     * @ElementName optionalUsageUserIdList
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null $optionalUsageUserIdList
     * @return $this
     */
    public function setOptionalUsageUserIdList($optionalUsageUserIdList)
    {
        $this->optionalUsageUserIdList = $optionalUsageUserIdList;
        return $this;
    }


}
