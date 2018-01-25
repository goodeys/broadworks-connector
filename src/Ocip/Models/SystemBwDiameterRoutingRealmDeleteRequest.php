<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBwDiameterRoutingRealmDeleteRequest
 *
 * Delete a static entry in the Realm Routing Table.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemBwDiameterRoutingRealmDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName instance
     * @var string|null
     */
    private $instance = null;

    /**
     * @ElementName realm
     * @var string|null
     */
    private $realm = null;

    /**
     * @ElementName applicationId
     * @var string|null
     */
    private $applicationId = null;

    /**
     * Getter for instance
     *
     * @ElementName instance
     * @return string|null
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * Setter for instance
     *
     * @ElementName instance
     * @param string|null $instance
     * @return $this
     */
    public function setInstance($instance)
    {
        $this->instance = $instance;
        return $this;
    }

    /**
     * Getter for realm
     *
     * @ElementName realm
     * @return string|null
     */
    public function getRealm()
    {
        return $this->realm;
    }

    /**
     * Setter for realm
     *
     * @ElementName realm
     * @param string|null $realm
     * @return $this
     */
    public function setRealm($realm)
    {
        $this->realm = $realm;
        return $this;
    }

    /**
     * Getter for applicationId
     *
     * @ElementName applicationId
     * @return string|null
     */
    public function getApplicationId()
    {
        return $this->applicationId;
    }

    /**
     * Setter for applicationId
     *
     * @ElementName applicationId
     * @param string|null $applicationId
     * @return $this
     */
    public function setApplicationId($applicationId)
    {
        $this->applicationId = $applicationId;
        return $this;
    }


}
