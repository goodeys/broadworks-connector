<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserGetRequest17sp3
 *
 * Replaced by: UserGetRequest18
 *         
 *         Request to get the user information.  The response is either 
 *         UserGetResponse17sp3 or ErrorResponse.
 *
 * @see UserGetRequest18
 * @see UserGetResponse17sp3
 * @see ErrorResponse
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:22767","type":"sequence"}]
 */
class UserGetRequest17sp3 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:22767
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

