<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * LoginRequest13mp10
 *
 * LoginRequest13mp10 is 2nd stage of the 2 stage OCI login process.
 *         The signedPassword is not required for external authentication login
 * from a trusted host (ACL).
 */
class LoginRequest13mp10 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName signedPassword
     * @var string|null
     */
    private $signedPassword = null;

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
     * Getter for signedPassword
     *
     * @ElementName signedPassword
     * @return string|null
     */
    public function getSignedPassword()
    {
        return $this->signedPassword;
    }

    /**
     * Setter for signedPassword
     *
     * @ElementName signedPassword
     * @param string|null $signedPassword
     * @return $this
     */
    public function setSignedPassword($signedPassword)
    {
        $this->signedPassword = $signedPassword;
        return $this;
    }


}
