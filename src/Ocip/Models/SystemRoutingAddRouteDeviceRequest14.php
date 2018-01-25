<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemRoutingAddRouteDeviceRequest14
 *
 * Request to add a routing device to a route.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemRoutingAddRouteDeviceRequest14 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName routeName
     * @var string|null
     */
    private $routeName = null;

    /**
     * @ElementName netAddress
     * @var string|null
     */
    private $netAddress = null;

    /**
     * @ElementName port
     * @var int|null
     */
    private $port = null;

    /**
     * @ElementName transportProtocol
     * @var string|null
     */
    private $transportProtocol = null;

    /**
     * @ElementName description
     * @var string|null
     */
    private $description = null;

    /**
     * Getter for routeName
     *
     * @ElementName routeName
     * @return string|null
     */
    public function getRouteName()
    {
        return $this->routeName;
    }

    /**
     * Setter for routeName
     *
     * @ElementName routeName
     * @param string|null $routeName
     * @return $this
     */
    public function setRouteName($routeName)
    {
        $this->routeName = $routeName;
        return $this;
    }

    /**
     * Getter for netAddress
     *
     * @ElementName netAddress
     * @return string|null
     */
    public function getNetAddress()
    {
        return $this->netAddress;
    }

    /**
     * Setter for netAddress
     *
     * @ElementName netAddress
     * @param string|null $netAddress
     * @return $this
     */
    public function setNetAddress($netAddress)
    {
        $this->netAddress = $netAddress;
        return $this;
    }

    /**
     * Getter for port
     *
     * @ElementName port
     * @return int|null
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * Setter for port
     *
     * @ElementName port
     * @param int|null $port
     * @return $this
     */
    public function setPort($port)
    {
        $this->port = $port;
        return $this;
    }

    /**
     * Getter for transportProtocol
     *
     * @ElementName transportProtocol
     * @return string|null
     */
    public function getTransportProtocol()
    {
        return $this->transportProtocol;
    }

    /**
     * Setter for transportProtocol
     *
     * @ElementName transportProtocol
     * @param string|null $transportProtocol
     * @return $this
     */
    public function setTransportProtocol($transportProtocol)
    {
        $this->transportProtocol = $transportProtocol;
        return $this;
    }

    /**
     * Getter for description
     *
     * @ElementName description
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Setter for description
     *
     * @ElementName description
     * @param string|null $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }


}
