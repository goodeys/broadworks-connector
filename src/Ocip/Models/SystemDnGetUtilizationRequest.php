<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDnGetUtilizationRequest
 *
 * Get the utilization of a single DN.
 *         The response is either SystemDnGetUtilizationResponse or ErrorResponse.
 *         Replaced By: SystemDnGetUtilizationRequest14sp3
 *
 * @see SystemDnGetUtilizationResponse
 * @see ErrorResponse
 * @see SystemDnGetUtilizationRequest14sp3
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:4929","type":"sequence"}]
 */
class SystemDnGetUtilizationRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName phoneNumber
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:4929
     * @var string|null
     */
    private $phoneNumber = null;

    /**
     * Getter for phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->phoneNumber;
    }

    /**
     * Setter for phoneNumber
     *
     * @param string $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPhoneNumber()
    {
        $this->phoneNumber = null;
        return $this;
    }


}

