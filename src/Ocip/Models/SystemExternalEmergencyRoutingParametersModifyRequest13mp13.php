<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemExternalEmergencyRoutingParametersModifyRequest13mp13
 *
 * Request to modify Call External Emergency Routing system parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemExternalEmergencyRoutingParametersModifyRequest13mp13 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceURI
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $serviceURI = null;

    /**
     * @ElementName defaultEmergencyNumber
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $defaultEmergencyNumber = null;

    /**
     * @ElementName isActive
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName supportsDNSSRV
     * @var bool|null
     */
    private $supportsDNSSRV = null;

    /**
     * @ElementName connectionTimeoutSeconds
     * @var int|null
     */
    private $connectionTimeoutSeconds = null;

    /**
     * Getter for serviceURI
     *
     * @ElementName serviceURI
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getServiceURI()
    {
        return $this->serviceURI;
    }

    /**
     * Setter for serviceURI
     *
     * @ElementName serviceURI
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $serviceURI
     * @return $this
     */
    public function setServiceURI($serviceURI)
    {
        $this->serviceURI = $serviceURI;
        return $this;
    }

    /**
     * Getter for defaultEmergencyNumber
     *
     * @ElementName defaultEmergencyNumber
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getDefaultEmergencyNumber()
    {
        return $this->defaultEmergencyNumber;
    }

    /**
     * Setter for defaultEmergencyNumber
     *
     * @ElementName defaultEmergencyNumber
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $defaultEmergencyNumber
     * @return $this
     */
    public function setDefaultEmergencyNumber($defaultEmergencyNumber)
    {
        $this->defaultEmergencyNumber = $defaultEmergencyNumber;
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
     * Getter for supportsDNSSRV
     *
     * @ElementName supportsDNSSRV
     * @return bool|null
     */
    public function getSupportsDNSSRV()
    {
        return $this->supportsDNSSRV;
    }

    /**
     * Setter for supportsDNSSRV
     *
     * @ElementName supportsDNSSRV
     * @param bool|null $supportsDNSSRV
     * @return $this
     */
    public function setSupportsDNSSRV($supportsDNSSRV)
    {
        $this->supportsDNSSRV = $supportsDNSSRV;
        return $this;
    }

    /**
     * Getter for connectionTimeoutSeconds
     *
     * @ElementName connectionTimeoutSeconds
     * @return int|null
     */
    public function getConnectionTimeoutSeconds()
    {
        return $this->connectionTimeoutSeconds;
    }

    /**
     * Setter for connectionTimeoutSeconds
     *
     * @ElementName connectionTimeoutSeconds
     * @param int|null $connectionTimeoutSeconds
     * @return $this
     */
    public function setConnectionTimeoutSeconds($connectionTimeoutSeconds)
    {
        $this->connectionTimeoutSeconds = $connectionTimeoutSeconds;
        return $this;
    }


}

