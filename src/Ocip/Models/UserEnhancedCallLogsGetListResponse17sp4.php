<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserEnhancedCallLogsGetListResponse17sp4
 *
 * Response to UserEnhancedCallLogsGetListRequest17sp4.
 *         Total numbers of rows is:
 *         - the total number of retrievable logs of the call log type that was
 * specified in the UserEnhancedCallLogsGetListRequest17sp4, 
 *           if a call log type was specified in the request.
 *         - the total number of retrievable logs, if no call log type was
 * specified in the request.
 *         A list of MixedCallLogsEntry will be returned if the call logs are
 * stored on CDS
 *         A list of ExtendedMixedCallLogsEntry will be returned if the call logs
 * are stored on DBS
 *         The logs are sorted by date/time of the call.
 *         Replaced by UserEnhancedCallLogsGetListResponse17sp4V2.
 *         Originally deprecated in release 20.
 */
class UserEnhancedCallLogsGetListResponse17sp4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName totalNumberOfRows
     * @var int|null
     */
    private $totalNumberOfRows = null;

    /**
     * @ElementName legacyEntry
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse17sp4\LegacyEntry|null
     */
    private $legacyEntry = null;

    /**
     * @ElementName extendedEntry
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse17sp4\ExtendedEntry|null
     */
    private $extendedEntry = null;

    /**
     * Getter for totalNumberOfRows
     *
     * @ElementName totalNumberOfRows
     * @return int|null
     */
    public function getTotalNumberOfRows()
    {
        return $this->totalNumberOfRows;
    }

    /**
     * Setter for totalNumberOfRows
     *
     * @ElementName totalNumberOfRows
     * @param int|null $totalNumberOfRows
     * @return $this
     */
    public function setTotalNumberOfRows($totalNumberOfRows)
    {
        $this->totalNumberOfRows = $totalNumberOfRows;
        return $this;
    }

    /**
     * Getter for legacyEntry
     *
     * @ElementName legacyEntry
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse17sp4\LegacyEntry|null
     */
    public function getLegacyEntry()
    {
        return $this->legacyEntry;
    }

    /**
     * Setter for legacyEntry
     *
     * @ElementName legacyEntry
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse17sp4\LegacyEntry|null $legacyEntry
     * @return $this
     */
    public function setLegacyEntry($legacyEntry)
    {
        $this->legacyEntry = $legacyEntry;
        return $this;
    }

    /**
     * Getter for extendedEntry
     *
     * @ElementName extendedEntry
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse17sp4\ExtendedEntry|null
     */
    public function getExtendedEntry()
    {
        return $this->extendedEntry;
    }

    /**
     * Setter for extendedEntry
     *
     * @ElementName extendedEntry
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse17sp4\ExtendedEntry|null $extendedEntry
     * @return $this
     */
    public function setExtendedEntry($extendedEntry)
    {
        $this->extendedEntry = $extendedEntry;
        return $this;
    }


}
