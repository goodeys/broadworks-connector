<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserTwoStageDialingModifyRequest
 *
 * Modify the user level data associated with Two Stage Dialing.
 *           The response is either a SuccessResponse or an ErrorResponse.
 */
class UserTwoStageDialingModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName isActive
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName allowActivationWithUserAddresses
     * @var bool|null
     */
    private $allowActivationWithUserAddresses = null;

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
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
     * Getter for allowActivationWithUserAddresses
     *
     * @ElementName allowActivationWithUserAddresses
     * @return bool|null
     */
    public function getAllowActivationWithUserAddresses()
    {
        return $this->allowActivationWithUserAddresses;
    }

    /**
     * Setter for allowActivationWithUserAddresses
     *
     * @ElementName allowActivationWithUserAddresses
     * @param bool|null $allowActivationWithUserAddresses
     * @return $this
     */
    public function setAllowActivationWithUserAddresses($allowActivationWithUserAddresses)
    {
        $this->allowActivationWithUserAddresses = $allowActivationWithUserAddresses;
        return $this;
    }


}
