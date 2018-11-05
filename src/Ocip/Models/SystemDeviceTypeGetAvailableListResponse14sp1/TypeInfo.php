<?php

namespace CWM\BroadWorksConnector\Ocip\Models\SystemDeviceTypeGetAvailableListResponse14sp1;

/**
 * TypeInfo
 */
class TypeInfo
{

    /**
     * @ElementName profile
     * @var string|null
     */
    private $profile = null;

    /**
     * @ElementName staticRegistrationCapable
     * @var bool|null
     */
    private $staticRegistrationCapable = null;

    /**
     * @ElementName configType
     * @var string|null
     */
    private $configType = null;

    /**
     * @ElementName protocolChoice
     * @var string[]
     */
    private $protocolChoice = array(
        
    );

    /**
     * @ElementName isIpAddressOptional
     * @var bool|null
     */
    private $isIpAddressOptional = null;

    /**
     * @ElementName useDomain
     * @var bool|null
     */
    private $useDomain = null;

    /**
     * Getter for profile
     *
     * @ElementName profile
     * @return string|null
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Setter for profile
     *
     * @ElementName profile
     * @param string|null $profile
     * @return $this
     */
    public function setProfile($profile)
    {
        $this->profile = $profile;
        return $this;
    }

    /**
     * Getter for staticRegistrationCapable
     *
     * @ElementName staticRegistrationCapable
     * @return bool|null
     */
    public function getStaticRegistrationCapable()
    {
        return $this->staticRegistrationCapable;
    }

    /**
     * Setter for staticRegistrationCapable
     *
     * @ElementName staticRegistrationCapable
     * @param bool|null $staticRegistrationCapable
     * @return $this
     */
    public function setStaticRegistrationCapable($staticRegistrationCapable)
    {
        $this->staticRegistrationCapable = $staticRegistrationCapable;
        return $this;
    }

    /**
     * Getter for configType
     *
     * @ElementName configType
     * @return string|null
     */
    public function getConfigType()
    {
        return $this->configType;
    }

    /**
     * Setter for configType
     *
     * @ElementName configType
     * @param string|null $configType
     * @return $this
     */
    public function setConfigType($configType)
    {
        $this->configType = $configType;
        return $this;
    }

    /**
     * Getter for protocolChoice
     *
     * @ElementName protocolChoice
     * @return string[]
     */
    public function getProtocolChoice()
    {
        return $this->protocolChoice;
    }

    /**
     * Setter for protocolChoice
     *
     * @ElementName protocolChoice
     * @param string[] $protocolChoice
     * @return $this
     */
    public function setProtocolChoice($protocolChoice)
    {
        $this->protocolChoice = $protocolChoice;
        return $this;
    }

    /**
     * Adder for protocolChoice
     *
     * @ElementName protocolChoice
     * @param string $protocolChoice
     * @return $this
     */
    public function addProtocolChoice($protocolChoice)
    {
        $this->protocolChoice []= $protocolChoice;
        return $this;
    }

    /**
     * Getter for isIpAddressOptional
     *
     * @ElementName isIpAddressOptional
     * @return bool|null
     */
    public function getIsIpAddressOptional()
    {
        return $this->isIpAddressOptional;
    }

    /**
     * Setter for isIpAddressOptional
     *
     * @ElementName isIpAddressOptional
     * @param bool|null $isIpAddressOptional
     * @return $this
     */
    public function setIsIpAddressOptional($isIpAddressOptional)
    {
        $this->isIpAddressOptional = $isIpAddressOptional;
        return $this;
    }

    /**
     * Getter for useDomain
     *
     * @ElementName useDomain
     * @return bool|null
     */
    public function getUseDomain()
    {
        return $this->useDomain;
    }

    /**
     * Setter for useDomain
     *
     * @ElementName useDomain
     * @param bool|null $useDomain
     * @return $this
     */
    public function setUseDomain($useDomain)
    {
        $this->useDomain = $useDomain;
        return $this;
    }


}
