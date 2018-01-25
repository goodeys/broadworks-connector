<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCommonPhoneListModifyRequest
 *
 * Modify an entry in an enterprise's common phone list.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class EnterpriseCommonPhoneListModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName entryName
     * @var string|null
     */
    private $entryName = null;

    /**
     * @ElementName newEntryName
     * @var string|null
     */
    private $newEntryName = null;

    /**
     * @ElementName phoneNumber
     * @var string|null
     */
    private $phoneNumber = null;

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for entryName
     *
     * @ElementName entryName
     * @return string|null
     */
    public function getEntryName()
    {
        return $this->entryName;
    }

    /**
     * Setter for entryName
     *
     * @ElementName entryName
     * @param string|null $entryName
     * @return $this
     */
    public function setEntryName($entryName)
    {
        $this->entryName = $entryName;
        return $this;
    }

    /**
     * Getter for newEntryName
     *
     * @ElementName newEntryName
     * @return string|null
     */
    public function getNewEntryName()
    {
        return $this->newEntryName;
    }

    /**
     * Setter for newEntryName
     *
     * @ElementName newEntryName
     * @param string|null $newEntryName
     * @return $this
     */
    public function setNewEntryName($newEntryName)
    {
        $this->newEntryName = $newEntryName;
        return $this;
    }

    /**
     * Getter for phoneNumber
     *
     * @ElementName phoneNumber
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Setter for phoneNumber
     *
     * @ElementName phoneNumber
     * @param string|null $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }


}
