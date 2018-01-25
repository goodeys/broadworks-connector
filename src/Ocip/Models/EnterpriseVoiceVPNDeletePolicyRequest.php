<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseVoiceVPNDeletePolicyRequest
 *
 * Delete a enterprise voice VPN location.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class EnterpriseVoiceVPNDeletePolicyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName locationDialingCode
     * @var string|null
     */
    private $locationDialingCode = null;

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
     * Getter for locationDialingCode
     *
     * @ElementName locationDialingCode
     * @return string|null
     */
    public function getLocationDialingCode()
    {
        return $this->locationDialingCode;
    }

    /**
     * Setter for locationDialingCode
     *
     * @ElementName locationDialingCode
     * @param string|null $locationDialingCode
     * @return $this
     */
    public function setLocationDialingCode($locationDialingCode)
    {
        $this->locationDialingCode = $locationDialingCode;
        return $this;
    }


}
