<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderHPBXAlternateCarrierSelectionModifyRequest
 *
 * Request to modify the Alternate Carrier Selection parameters.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderHPBXAlternateCarrierSelectionModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName processCbcCarrierSelection
     * @var bool|null
     */
    private $processCbcCarrierSelection = null;

    /**
     * @ElementName preselectedLocalCarrier
     * @var string|null
     */
    private $preselectedLocalCarrier = null;

    /**
     * @ElementName preselectedDistantCarrier
     * @var string|null
     */
    private $preselectedDistantCarrier = null;

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for processCbcCarrierSelection
     *
     * @ElementName processCbcCarrierSelection
     * @return bool|null
     */
    public function getProcessCbcCarrierSelection()
    {
        return $this->processCbcCarrierSelection;
    }

    /**
     * Setter for processCbcCarrierSelection
     *
     * @ElementName processCbcCarrierSelection
     * @param bool|null $processCbcCarrierSelection
     * @return $this
     */
    public function setProcessCbcCarrierSelection($processCbcCarrierSelection)
    {
        $this->processCbcCarrierSelection = $processCbcCarrierSelection;
        return $this;
    }

    /**
     * Getter for preselectedLocalCarrier
     *
     * @ElementName preselectedLocalCarrier
     * @return string|null
     */
    public function getPreselectedLocalCarrier()
    {
        return $this->preselectedLocalCarrier;
    }

    /**
     * Setter for preselectedLocalCarrier
     *
     * @ElementName preselectedLocalCarrier
     * @param string|null $preselectedLocalCarrier
     * @return $this
     */
    public function setPreselectedLocalCarrier($preselectedLocalCarrier)
    {
        $this->preselectedLocalCarrier = $preselectedLocalCarrier;
        return $this;
    }

    /**
     * Getter for preselectedDistantCarrier
     *
     * @ElementName preselectedDistantCarrier
     * @return string|null
     */
    public function getPreselectedDistantCarrier()
    {
        return $this->preselectedDistantCarrier;
    }

    /**
     * Setter for preselectedDistantCarrier
     *
     * @ElementName preselectedDistantCarrier
     * @param string|null $preselectedDistantCarrier
     * @return $this
     */
    public function setPreselectedDistantCarrier($preselectedDistantCarrier)
    {
        $this->preselectedDistantCarrier = $preselectedDistantCarrier;
        return $this;
    }


}
