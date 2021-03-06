<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupRoutePointGetDNISListResponse
 *
 * Response to the GroupRoutePointGetDNISListRequest.
 *         Contains a table with column headings: "Name", "Phone Number", "Extension".
 *
 * @see GroupRoutePointGetDNISListRequest
 * @Groups [{"id":"a27224a048c30ff69eab9209dec841cc:524","type":"sequence"}]
 */
class GroupRoutePointGetDNISListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName displayDNISNumber
     * @Type bool
     * @Group a27224a048c30ff69eab9209dec841cc:524
     * @var bool|null
     */
    private $displayDNISNumber = null;

    /**
     * @ElementName displayDNISName
     * @Type bool
     * @Group a27224a048c30ff69eab9209dec841cc:524
     * @var bool|null
     */
    private $displayDNISName = null;

    /**
     * @ElementName dnisTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group a27224a048c30ff69eab9209dec841cc:524
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $dnisTable = null;

    /**
     * Getter for displayDNISNumber
     *
     * @return bool
     */
    public function getDisplayDNISNumber()
    {
        return $this->displayDNISNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->displayDNISNumber;
    }

    /**
     * Setter for displayDNISNumber
     *
     * @param bool $displayDNISNumber
     * @return $this
     */
    public function setDisplayDNISNumber($displayDNISNumber)
    {
        $this->displayDNISNumber = $displayDNISNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDisplayDNISNumber()
    {
        $this->displayDNISNumber = null;
        return $this;
    }

    /**
     * Getter for displayDNISName
     *
     * @return bool
     */
    public function getDisplayDNISName()
    {
        return $this->displayDNISName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->displayDNISName;
    }

    /**
     * Setter for displayDNISName
     *
     * @param bool $displayDNISName
     * @return $this
     */
    public function setDisplayDNISName($displayDNISName)
    {
        $this->displayDNISName = $displayDNISName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDisplayDNISName()
    {
        $this->displayDNISName = null;
        return $this;
    }

    /**
     * Getter for dnisTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getDnisTable()
    {
        return $this->dnisTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->dnisTable;
    }

    /**
     * Setter for dnisTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $dnisTable
     * @return $this
     */
    public function setDnisTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $dnisTable)
    {
        $this->dnisTable = $dnisTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDnisTable()
    {
        $this->dnisTable = null;
        return $this;
    }


}

