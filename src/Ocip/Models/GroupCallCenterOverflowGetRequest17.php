<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterOverflowGetRequest17
 *
 * Get a call center's overflow settings.
 *         The response is either a GroupCallCenterOverflowGetResponse17 or an ErrorResponse.
 *
 * @see GroupCallCenterOverflowGetResponse17
 * @see ErrorResponse
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:4390","type":"sequence"}]
 */
class GroupCallCenterOverflowGetRequest17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:4390
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * Getter for serviceUserId
     *
     * @return string
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @param string $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceUserId()
    {
        $this->serviceUserId = null;
        return $this;
    }


}

