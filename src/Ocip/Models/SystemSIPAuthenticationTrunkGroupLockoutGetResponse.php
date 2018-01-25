<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPAuthenticationTrunkGroupLockoutGetResponse
 *
 * Response to SystemSIPAuthenticationTrunkGroupLockoutGetRequest.
 *         The column headings for the lockoutTable are:
 *            "Organization Id", "Organization Type", "Group Id", "Trunk Group
 * Name", "Lockout Started", "Lockout Expires", "Lockout Count". Lockout times are
 * shown in the system GMT time. When a permanent lockout is shown, the "Lockout
 * Expires" column is empty and the "Lockout Count" column contains the word
 * Permanent.
 */
class SystemSIPAuthenticationTrunkGroupLockoutGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName lockoutTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $lockoutTable = null;

    /**
     * Getter for lockoutTable
     *
     * @ElementName lockoutTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getLockoutTable()
    {
        return $this->lockoutTable;
    }

    /**
     * Setter for lockoutTable
     *
     * @ElementName lockoutTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $lockoutTable
     * @return $this
     */
    public function setLockoutTable($lockoutTable)
    {
        $this->lockoutTable = $lockoutTable;
        return $this;
    }


}
