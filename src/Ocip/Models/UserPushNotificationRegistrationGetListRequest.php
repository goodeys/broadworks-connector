<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPushNotificationRegistrationGetListRequest
 *
 * Request a table containing all of the push notification registrations for a user by 
 *         either registration id or user id.
 *         The response is either UserPushNotificationRegistrationGetListResponse or ErrorResponse.
 *
 * @see UserPushNotificationRegistrationGetListResponse
 * @see ErrorResponse
 * @Groups [{"id":"53d18cc797d03d802cbc411ad821f1d4:3231","type":"sequence","children":[{"id":"53d18cc797d03d802cbc411ad821f1d4:3232","type":"choice"}]}]
 */
class UserPushNotificationRegistrationGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName registrationId
     * @Type string
     * @Group 53d18cc797d03d802cbc411ad821f1d4:3232
     * @var string|null
     */
    private $registrationId = null;

    /**
     * @ElementName userId
     * @Type string
     * @Group 53d18cc797d03d802cbc411ad821f1d4:3232
     * @var string|null
     */
    private $userId = null;

    /**
     * Getter for registrationId
     *
     * @return string
     */
    public function getRegistrationId()
    {
        return $this->registrationId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->registrationId;
    }

    /**
     * Setter for registrationId
     *
     * @param string $registrationId
     * @return $this
     */
    public function setRegistrationId($registrationId)
    {
        $this->registrationId = $registrationId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRegistrationId()
    {
        $this->registrationId = null;
        return $this;
    }

    /**
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
        return $this;
    }


}

