<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemRoutingGetResponse
 *
 * Response to SystemRoutingGetRequest.
 */
class SystemRoutingGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isRouteRoundRobin
     * @var bool|null
     */
    private $isRouteRoundRobin = null;

    /**
     * @ElementName routeTimerSeconds
     * @var int|null
     */
    private $routeTimerSeconds = null;

    /**
     * @ElementName dnsResolvedAddressSelectionPolicy
     * @var string|null
     */
    private $dnsResolvedAddressSelectionPolicy = null;

    /**
     * @ElementName statefulExpirationMinutes
     * @var int|null
     */
    private $statefulExpirationMinutes = null;

    /**
     * @ElementName maxAddressesPerHostname
     * @var int|null
     */
    private $maxAddressesPerHostname = null;

    /**
     * @ElementName maxAddressesDuringSetup
     * @var int|null
     */
    private $maxAddressesDuringSetup = null;

    /**
     * Getter for isRouteRoundRobin
     *
     * @ElementName isRouteRoundRobin
     * @return bool|null
     */
    public function getIsRouteRoundRobin()
    {
        return $this->isRouteRoundRobin;
    }

    /**
     * Setter for isRouteRoundRobin
     *
     * @ElementName isRouteRoundRobin
     * @param bool|null $isRouteRoundRobin
     * @return $this
     */
    public function setIsRouteRoundRobin($isRouteRoundRobin)
    {
        $this->isRouteRoundRobin = $isRouteRoundRobin;
        return $this;
    }

    /**
     * Getter for routeTimerSeconds
     *
     * @ElementName routeTimerSeconds
     * @return int|null
     */
    public function getRouteTimerSeconds()
    {
        return $this->routeTimerSeconds;
    }

    /**
     * Setter for routeTimerSeconds
     *
     * @ElementName routeTimerSeconds
     * @param int|null $routeTimerSeconds
     * @return $this
     */
    public function setRouteTimerSeconds($routeTimerSeconds)
    {
        $this->routeTimerSeconds = $routeTimerSeconds;
        return $this;
    }

    /**
     * Getter for dnsResolvedAddressSelectionPolicy
     *
     * @ElementName dnsResolvedAddressSelectionPolicy
     * @return string|null
     */
    public function getDnsResolvedAddressSelectionPolicy()
    {
        return $this->dnsResolvedAddressSelectionPolicy;
    }

    /**
     * Setter for dnsResolvedAddressSelectionPolicy
     *
     * @ElementName dnsResolvedAddressSelectionPolicy
     * @param string|null $dnsResolvedAddressSelectionPolicy
     * @return $this
     */
    public function setDnsResolvedAddressSelectionPolicy($dnsResolvedAddressSelectionPolicy)
    {
        $this->dnsResolvedAddressSelectionPolicy = $dnsResolvedAddressSelectionPolicy;
        return $this;
    }

    /**
     * Getter for statefulExpirationMinutes
     *
     * @ElementName statefulExpirationMinutes
     * @return int|null
     */
    public function getStatefulExpirationMinutes()
    {
        return $this->statefulExpirationMinutes;
    }

    /**
     * Setter for statefulExpirationMinutes
     *
     * @ElementName statefulExpirationMinutes
     * @param int|null $statefulExpirationMinutes
     * @return $this
     */
    public function setStatefulExpirationMinutes($statefulExpirationMinutes)
    {
        $this->statefulExpirationMinutes = $statefulExpirationMinutes;
        return $this;
    }

    /**
     * Getter for maxAddressesPerHostname
     *
     * @ElementName maxAddressesPerHostname
     * @return int|null
     */
    public function getMaxAddressesPerHostname()
    {
        return $this->maxAddressesPerHostname;
    }

    /**
     * Setter for maxAddressesPerHostname
     *
     * @ElementName maxAddressesPerHostname
     * @param int|null $maxAddressesPerHostname
     * @return $this
     */
    public function setMaxAddressesPerHostname($maxAddressesPerHostname)
    {
        $this->maxAddressesPerHostname = $maxAddressesPerHostname;
        return $this;
    }

    /**
     * Getter for maxAddressesDuringSetup
     *
     * @ElementName maxAddressesDuringSetup
     * @return int|null
     */
    public function getMaxAddressesDuringSetup()
    {
        return $this->maxAddressesDuringSetup;
    }

    /**
     * Setter for maxAddressesDuringSetup
     *
     * @ElementName maxAddressesDuringSetup
     * @param int|null $maxAddressesDuringSetup
     * @return $this
     */
    public function setMaxAddressesDuringSetup($maxAddressesDuringSetup)
    {
        $this->maxAddressesDuringSetup = $maxAddressesDuringSetup;
        return $this;
    }


}
