<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderServicePackGetUtilizationListResponse
 *
 * Response to ServiceProviderServicePackGetUtilizationListRequest.
 *         For each service pack, a table of groups utilizing the pack is returned.
 *         The utilization table column headings are "Group", "Total Packs" and
 * "Assigned".
 */
class ServiceProviderServicePackGetUtilizationListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName servicePackName
     * @var string[]
     */
    private $servicePackName = array(
        
    );

    /**
     * @ElementName serviceUtilizationTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable[]
     */
    private $serviceUtilizationTable = array(
        
    );

    /**
     * Getter for servicePackName
     *
     * @ElementName servicePackName
     * @return string[]
     */
    public function getServicePackName()
    {
        return $this->servicePackName;
    }

    /**
     * Setter for servicePackName
     *
     * @ElementName servicePackName
     * @param string[] $servicePackName
     * @return $this
     */
    public function setServicePackName($servicePackName)
    {
        $this->servicePackName = $servicePackName;
        return $this;
    }

    /**
     * Adder for servicePackName
     *
     * @ElementName servicePackName
     * @param string $servicePackName
     * @return $this
     */
    public function addServicePackName($servicePackName)
    {
        $this->servicePackName []= $servicePackName;
        return $this;
    }

    /**
     * Getter for serviceUtilizationTable
     *
     * @ElementName serviceUtilizationTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable[]
     */
    public function getServiceUtilizationTable()
    {
        return $this->serviceUtilizationTable;
    }

    /**
     * Setter for serviceUtilizationTable
     *
     * @ElementName serviceUtilizationTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable[] $serviceUtilizationTable
     * @return $this
     */
    public function setServiceUtilizationTable($serviceUtilizationTable)
    {
        $this->serviceUtilizationTable = $serviceUtilizationTable;
        return $this;
    }

    /**
     * Adder for serviceUtilizationTable
     *
     * @ElementName serviceUtilizationTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $serviceUtilizationTable
     * @return $this
     */
    public function addServiceUtilizationTable($serviceUtilizationTable)
    {
        $this->serviceUtilizationTable []= $serviceUtilizationTable;
        return $this;
    }


}
