<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAnnouncementFileDeleteListRequest
 *
 * Delete one or more announcements from the user announcement repository
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"53d18cc797d03d802cbc411ad821f1d4:495","type":"sequence"}]
 */
class UserAnnouncementFileDeleteListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 53d18cc797d03d802cbc411ad821f1d4:495
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName announcementFileKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey
     * @Array
     * @Group 53d18cc797d03d802cbc411ad821f1d4:495
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey[]
     */
    private $announcementFileKey = array(
        
    );

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

    /**
     * Getter for announcementFileKey
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey[]
     */
    public function getAnnouncementFileKey()
    {
        return $this->announcementFileKey instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->announcementFileKey;
    }

    /**
     * Setter for announcementFileKey
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey[] $announcementFileKey
     * @return $this
     */
    public function setAnnouncementFileKey(array $announcementFileKey)
    {
        $this->announcementFileKey = $announcementFileKey;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAnnouncementFileKey()
    {
        $this->announcementFileKey = null;
        return $this;
    }

    /**
     * Adder for announcementFileKey
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey $announcementFileKey
     * @return $this
     */
    public function addAnnouncementFileKey($announcementFileKey)
    {
        $this->announcementFileKey[] = $announcementFileKey;
        return $this;
    }


}

