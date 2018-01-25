<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceManagementTagSetGetListResponse22
 *
 * Response to SystemDeviceManagementTagSetGetListRequest22.
 *         The response includes a table of tag set names defined in the system.
 *         Column headings are: "Tag Set Name", "Reseller Id".
 *
 *         The following columns are only returned in AS data mode:       
 *           "Reseller Id"
 *         The system default tag set name is not part of this response.
 */
class SystemDeviceManagementTagSetGetListResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName tagSetTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $tagSetTable = null;

    /**
     * Getter for tagSetTable
     *
     * @ElementName tagSetTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getTagSetTable()
    {
        return $this->tagSetTable;
    }

    /**
     * Setter for tagSetTable
     *
     * @ElementName tagSetTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $tagSetTable
     * @return $this
     */
    public function setTagSetTable($tagSetTable)
    {
        $this->tagSetTable = $tagSetTable;
        return $this;
    }


}
