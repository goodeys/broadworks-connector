<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserEnhancedCallLogsGetListResponse21
 *
 * Response to UserEnhancedCallLogsGetListRequest21.
 *         Total numbers of rows is:
 *         - the total number of retrievable logs of the call log type that was specified in the UserEnhancedCallLogsGetListRequest21, 
 *           if a call log type was specified in the request.
 *         - the total number of retrievable logs, if no call log type was specified in the request.
 *         A list of MixedCallLogsEntry will be returned if the call logs are stored on CDS
 *         A list of ExtendedMixedCallLogsEntry21 will be returned if the call logs are stored on DBS
 *         The logs are sorted by date/time of the call.
 *         
 *         Replaced by: UserEnhancedCallLogsGetListResponse21Sp1 in AS data mode
 *
 * @see UserEnhancedCallLogsGetListRequest21
 * @see UserEnhancedCallLogsGetListRequest21
 * @see UserEnhancedCallLogsGetListResponse21Sp1
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:7519","type":"sequence","children":[{"id":"de4d76f01f337fe4694212ec9f771753:7521","type":"choice"}]}]
 */
class UserEnhancedCallLogsGetListResponse21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName totalNumberOfRows
     * @Type int
     * @Group de4d76f01f337fe4694212ec9f771753:7519
     * @var int|null
     */
    private $totalNumberOfRows = null;

    /**
     * @ElementName legacyEntry
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse21LegacyEntry
     * @Group de4d76f01f337fe4694212ec9f771753:7521
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse21LegacyEntry|null
     */
    private $legacyEntry = null;

    /**
     * @ElementName extendedEntry
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse21ExtendedEntry
     * @Group de4d76f01f337fe4694212ec9f771753:7521
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse21ExtendedEntry|null
     */
    private $extendedEntry = null;

    /**
     * Getter for totalNumberOfRows
     *
     * @return int
     */
    public function getTotalNumberOfRows()
    {
        return $this->totalNumberOfRows instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->totalNumberOfRows;
    }

    /**
     * Setter for totalNumberOfRows
     *
     * @param int $totalNumberOfRows
     * @return $this
     */
    public function setTotalNumberOfRows($totalNumberOfRows)
    {
        $this->totalNumberOfRows = $totalNumberOfRows;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTotalNumberOfRows()
    {
        $this->totalNumberOfRows = null;
        return $this;
    }

    /**
     * Getter for legacyEntry
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse21LegacyEntry
     */
    public function getLegacyEntry()
    {
        return $this->legacyEntry instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->legacyEntry;
    }

    /**
     * Setter for legacyEntry
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse21LegacyEntry $legacyEntry
     * @return $this
     */
    public function setLegacyEntry(\CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse21LegacyEntry $legacyEntry)
    {
        $this->legacyEntry = $legacyEntry;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLegacyEntry()
    {
        $this->legacyEntry = null;
        return $this;
    }

    /**
     * Getter for extendedEntry
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse21ExtendedEntry
     */
    public function getExtendedEntry()
    {
        return $this->extendedEntry instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->extendedEntry;
    }

    /**
     * Setter for extendedEntry
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse21ExtendedEntry $extendedEntry
     * @return $this
     */
    public function setExtendedEntry(\CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse21ExtendedEntry $extendedEntry)
    {
        $this->extendedEntry = $extendedEntry;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExtendedEntry()
    {
        $this->extendedEntry = null;
        return $this;
    }


}

