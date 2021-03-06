<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPushNotificationGetRequest
 *
 * Get the push notification settings for a user.
 *         The response is either UserPushNotificationGetResponse or ErrorResponse.
 *
 * @see UserPushNotificationGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"53d18cc797d03d802cbc411ad821f1d4:3376","type":"sequence"}]
 */
class UserPushNotificationGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 53d18cc797d03d802cbc411ad821f1d4:3376
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $userId = null;

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

