<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallRecordingAddPlatformRequest
 *
 * Add a Call Recording platform.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         Replaced by: SystemCallRecordingAddPlatformRequest19
 */
class SystemCallRecordingAddPlatformRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName name
     * @var string|null
     */
    private $name = null;

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
     * @ElementName mediaStream
     * @var string|null
     */
    private $mediaStream = null;

    /**
     * @ElementName transportType
     * @var string|null
     */
    private $transportType = null;

    /**
     * @ElementName description
     * @var string|null
     */
    private $description = null;

    /**
     * Getter for name
     *
     * @ElementName name
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Setter for name
     *
     * @ElementName name
     * @param string|null $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * Getter for mediaStream
     *
     * @ElementName mediaStream
     * @return string|null
     */
    public function getMediaStream()
    {
        return $this->mediaStream;
    }

    /**
     * Setter for mediaStream
     *
     * @ElementName mediaStream
     * @param string|null $mediaStream
     * @return $this
     */
    public function setMediaStream($mediaStream)
    {
        $this->mediaStream = $mediaStream;
        return $this;
    }

    /**
     * Getter for transportType
     *
     * @ElementName transportType
     * @return string|null
     */
    public function getTransportType()
    {
        return $this->transportType;
    }

    /**
     * Setter for transportType
     *
     * @ElementName transportType
     * @param string|null $transportType
     * @return $this
     */
    public function setTransportType($transportType)
    {
        $this->transportType = $transportType;
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
