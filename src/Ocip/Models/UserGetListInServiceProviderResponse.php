<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserGetListInServiceProviderResponse
 *
 * Response to UserGetListInServiceProviderRequest.
 *         Contains a table with column headings : "User Id", "Group Id",
 *         "Last Name", "First Name", "Department", "Phone Number", "Phone Number Activated", "Email Address", "Hiragana Last Name", "Hiragana First Name", "In Trunk Group", "Extension"
 *         in a row for each user.
 *
 * @see UserGetListInServiceProviderRequest
 * @Groups [{"id":"53d18cc797d03d802cbc411ad821f1d4:1871","type":"sequence"}]
 */
class UserGetListInServiceProviderResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName userTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1871
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $userTable = null;

    /**
     * Getter for userTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getUserTable()
    {
        return $this->userTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userTable;
    }

    /**
     * Setter for userTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $userTable
     * @return $this
     */
    public function setUserTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $userTable)
    {
        $this->userTable = $userTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserTable()
    {
        $this->userTable = null;
        return $this;
    }


}

