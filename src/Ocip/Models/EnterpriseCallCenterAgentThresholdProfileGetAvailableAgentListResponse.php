<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCallCenterAgentThresholdProfileGetAvailableAgentListResponse
 *
 * Response to the
 * EnterpriseCallCenterAgentThresholdProfileGetAvailableAgentListRequest.
 *         Contains a table with column headings: "User Id", "Last Name",
 *         "First Name", "Hiragana Last Name", "Hiragana First Name",
 *         "Phone Number", "Extension", "Department", "Email Address", "Agent
 * Threshold Profile";
 */
class EnterpriseCallCenterAgentThresholdProfileGetAvailableAgentListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName agentTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $agentTable = null;

    /**
     * Getter for agentTable
     *
     * @ElementName agentTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getAgentTable()
    {
        return $this->agentTable;
    }

    /**
     * Setter for agentTable
     *
     * @ElementName agentTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $agentTable
     * @return $this
     */
    public function setAgentTable($agentTable)
    {
        $this->agentTable = $agentTable;
        return $this;
    }


}
