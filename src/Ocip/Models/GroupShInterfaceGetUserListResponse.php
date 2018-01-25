<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupShInterfaceGetUserListResponse
 *
 * Response to the GroupShInterfaceGetUserListRequest.
 *         The response contains the Sh Non Transparent data and associated Public
 * User Identity
 *         information for every Public User Identity in the group.
 *         
 *         Replaced by: GroupShInterfaceGetUserListResponse21sp1 in AS data mode.
 */
class GroupShInterfaceGetUserListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName entry
     * @var \CWM\BroadWorksConnector\Ocip\Models\ShInterfaceUserListEntry[]
     */
    private $entry = array(
        
    );

    /**
     * Getter for entry
     *
     * @ElementName entry
     * @return \CWM\BroadWorksConnector\Ocip\Models\ShInterfaceUserListEntry[]
     */
    public function getEntry()
    {
        return $this->entry;
    }

    /**
     * Setter for entry
     *
     * @ElementName entry
     * @param \CWM\BroadWorksConnector\Ocip\Models\ShInterfaceUserListEntry[] $entry
     * @return $this
     */
    public function setEntry($entry)
    {
        $this->entry = $entry;
        return $this;
    }

    /**
     * Adder for entry
     *
     * @ElementName entry
     * @param \CWM\BroadWorksConnector\Ocip\Models\ShInterfaceUserListEntry $entry
     * @return $this
     */
    public function addEntry($entry)
    {
        $this->entry []= $entry;
        return $this;
    }


}
