<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallCenterModifyCallCenterListRequest
 *
 * Request to modify the call center list for an agent.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class UserCallCenterModifyCallCenterListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName agentUserId
     * @var string|null
     */
    private $agentUserId = null;

    /**
     * @ElementName serviceUserIdList
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $serviceUserIdList = null;

    /**
     * Getter for agentUserId
     *
     * @ElementName agentUserId
     * @return string|null
     */
    public function getAgentUserId()
    {
        return $this->agentUserId;
    }

    /**
     * Setter for agentUserId
     *
     * @ElementName agentUserId
     * @param string|null $agentUserId
     * @return $this
     */
    public function setAgentUserId($agentUserId)
    {
        $this->agentUserId = $agentUserId;
        return $this;
    }

    /**
     * Getter for serviceUserIdList
     *
     * @ElementName serviceUserIdList
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getServiceUserIdList()
    {
        return $this->serviceUserIdList;
    }

    /**
     * Setter for serviceUserIdList
     *
     * @ElementName serviceUserIdList
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null|\CWM\BroadWorksConnector\Ocip\Nil $serviceUserIdList
     * @return $this
     */
    public function setServiceUserIdList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList $serviceUserIdList)
    {
        $this->serviceUserIdList = $serviceUserIdList;
        return $this;
    }


}

