<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderNetworkClassOfServiceAssignListToAllGroupsRequest
 *
 * Assign a list of Network Classes of Service to all groups with in a 
 *         service provider. If it is the first assigned Network Class of Service
 * in 
 *         the group, it will be set as the default one.
 *         The Network Classes of Service must be currently
 *         assigned to the service provider. The response is either a 
 *         SuccessResponse or an ErrorResponse.
 */
class ServiceProviderNetworkClassOfServiceAssignListToAllGroupsRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName networkClassOfService
     * @var string[]
     */
    private $networkClassOfService = array(
        
    );

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
     * Getter for networkClassOfService
     *
     * @ElementName networkClassOfService
     * @return string[]
     */
    public function getNetworkClassOfService()
    {
        return $this->networkClassOfService;
    }

    /**
     * Setter for networkClassOfService
     *
     * @ElementName networkClassOfService
     * @param string[] $networkClassOfService
     * @return $this
     */
    public function setNetworkClassOfService($networkClassOfService)
    {
        $this->networkClassOfService = $networkClassOfService;
        return $this;
    }

    /**
     * Adder for networkClassOfService
     *
     * @ElementName networkClassOfService
     * @param string $networkClassOfService
     * @return $this
     */
    public function addNetworkClassOfService($networkClassOfService)
    {
        $this->networkClassOfService []= $networkClassOfService;
        return $this;
    }


}
