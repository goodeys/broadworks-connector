<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallCenterEnhancedReportingReportTemplateGetListResponse
 *
 * Response to SystemCallCenterEnhancedReportingReportTemplateGetListRequest. 
 *         Contains a table with column headings: "Name", "Description", "Is
 * Custom", "Type" and "Enabled"
 */
class SystemCallCenterEnhancedReportingReportTemplateGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName reportTemplateTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $reportTemplateTable = null;

    /**
     * Getter for reportTemplateTable
     *
     * @ElementName reportTemplateTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getReportTemplateTable()
    {
        return $this->reportTemplateTable;
    }

    /**
     * Setter for reportTemplateTable
     *
     * @ElementName reportTemplateTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $reportTemplateTable
     * @return $this
     */
    public function setReportTemplateTable($reportTemplateTable)
    {
        $this->reportTemplateTable = $reportTemplateTable;
        return $this;
    }


}
