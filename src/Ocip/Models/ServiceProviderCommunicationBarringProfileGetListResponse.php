<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderCommunicationBarringProfileGetListResponse
 *
 * Response to the ServiceProviderCommunicationBarringProfileGetListRequest.
 *         The response contains a table of all Communication Barring Profiles
 *         for the service provider. The column headings are "Default" , "Name" and
 * "Description"
 */
class ServiceProviderCommunicationBarringProfileGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName profileTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $profileTable = null;

    /**
     * Getter for profileTable
     *
     * @ElementName profileTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getProfileTable()
    {
        return $this->profileTable;
    }

    /**
     * Setter for profileTable
     *
     * @ElementName profileTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $profileTable
     * @return $this
     */
    public function setProfileTable($profileTable)
    {
        $this->profileTable = $profileTable;
        return $this;
    }


}
