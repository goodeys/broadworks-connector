<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupTrunkGroupGetInstanceResponse14sp9
 *
 * Response to GroupTrunkGroupGetInstanceRequest14sp9.
 *         Returns the profile information for the Trunk Group.
 *         Contains a hosted user table with column headings: "User Id", "Last
 * Name",
 *         "First Name", "Hiragana Last Name", "Hiragana First Name".
 */
class GroupTrunkGroupGetInstanceResponse14sp9 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName pilotUserId
     * @var string|null
     */
    private $pilotUserId = null;

    /**
     * @ElementName department
     * @var \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey|null
     */
    private $department = null;

    /**
     * @ElementName accessDevice
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDevice|null
     */
    private $accessDevice = null;

    /**
     * @ElementName maxActiveCalls
     * @var int|null
     */
    private $maxActiveCalls = null;

    /**
     * @ElementName maxIncomingCalls
     * @var int|null
     */
    private $maxIncomingCalls = null;

    /**
     * @ElementName maxOutgoingCalls
     * @var int|null
     */
    private $maxOutgoingCalls = null;

    /**
     * @ElementName enableBursting
     * @var bool|null
     */
    private $enableBursting = null;

    /**
     * @ElementName burstingMaxActiveCalls
     * @var int|null
     */
    private $burstingMaxActiveCalls = null;

    /**
     * @ElementName burstingMaxIncomingCalls
     * @var int|null
     */
    private $burstingMaxIncomingCalls = null;

    /**
     * @ElementName burstingMaxOutgoingCalls
     * @var int|null
     */
    private $burstingMaxOutgoingCalls = null;

    /**
     * @ElementName capacityExceededAction
     * @var string|null
     */
    private $capacityExceededAction = null;

    /**
     * @ElementName capacityExceededForwardAddress
     * @var string|null
     */
    private $capacityExceededForwardAddress = null;

    /**
     * @ElementName capacityExceededRerouteTrunkGroupKey
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey|null
     */
    private $capacityExceededRerouteTrunkGroupKey = null;

    /**
     * @ElementName capacityExceededTrapInitialCalls
     * @var int|null
     */
    private $capacityExceededTrapInitialCalls = null;

    /**
     * @ElementName capacityExceededTrapOffsetCalls
     * @var int|null
     */
    private $capacityExceededTrapOffsetCalls = null;

    /**
     * @ElementName unreachableDestinationAction
     * @var string|null
     */
    private $unreachableDestinationAction = null;

    /**
     * @ElementName unreachableDestinationForwardAddress
     * @var string|null
     */
    private $unreachableDestinationForwardAddress = null;

    /**
     * @ElementName unreachableDestinationRerouteTrunkGroupKey
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey|null
     */
    private $unreachableDestinationRerouteTrunkGroupKey = null;

    /**
     * @ElementName unreachableDestinationTrapInitialCalls
     * @var int|null
     */
    private $unreachableDestinationTrapInitialCalls = null;

    /**
     * @ElementName unreachableDestinationTrapOffsetCalls
     * @var int|null
     */
    private $unreachableDestinationTrapOffsetCalls = null;

    /**
     * @ElementName invitationTimeout
     * @var int|null
     */
    private $invitationTimeout = null;

    /**
     * @ElementName requireAuthentication
     * @var bool|null
     */
    private $requireAuthentication = null;

    /**
     * @ElementName sipAuthenticationUserName
     * @var string|null
     */
    private $sipAuthenticationUserName = null;

    /**
     * @ElementName hostedUserTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $hostedUserTable = null;

    /**
     * @ElementName trunkGroupIdentity
     * @var string|null
     */
    private $trunkGroupIdentity = null;

    /**
     * @ElementName otgDtgIdentity
     * @var string|null
     */
    private $otgDtgIdentity = null;

    /**
     * @ElementName includeTrunkGroupIdentity
     * @var bool|null
     */
    private $includeTrunkGroupIdentity = null;

    /**
     * @ElementName includeDtgIdentity
     * @var bool|null
     */
    private $includeDtgIdentity = null;

    /**
     * @ElementName enableNetworkAddressIdentity
     * @var bool|null
     */
    private $enableNetworkAddressIdentity = null;

    /**
     * @ElementName allowUnscreenedCalls
     * @var bool|null
     */
    private $allowUnscreenedCalls = null;

    /**
     * @ElementName allowUnscreenedEmergencyCalls
     * @var bool|null
     */
    private $allowUnscreenedEmergencyCalls = null;

    /**
     * @ElementName usePilotUserCallingLineIdentity
     * @var bool|null
     */
    private $usePilotUserCallingLineIdentity = null;

    /**
     * @ElementName usePilotUserChargeNumber
     * @var bool|null
     */
    private $usePilotUserChargeNumber = null;

    /**
     * @ElementName callForwardingAlwaysAction
     * @var string|null
     */
    private $callForwardingAlwaysAction = null;

    /**
     * @ElementName callForwardingAlwaysForwardAddress
     * @var string|null
     */
    private $callForwardingAlwaysForwardAddress = null;

    /**
     * @ElementName callForwardingAlwaysRerouteTrunkGroupKey
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey|null
     */
    private $callForwardingAlwaysRerouteTrunkGroupKey = null;

    /**
     * Getter for pilotUserId
     *
     * @ElementName pilotUserId
     * @return string|null
     */
    public function getPilotUserId()
    {
        return $this->pilotUserId;
    }

    /**
     * Setter for pilotUserId
     *
     * @ElementName pilotUserId
     * @param string|null $pilotUserId
     * @return $this
     */
    public function setPilotUserId($pilotUserId)
    {
        $this->pilotUserId = $pilotUserId;
        return $this;
    }

    /**
     * Getter for department
     *
     * @ElementName department
     * @return \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey|null
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * Setter for department
     *
     * @ElementName department
     * @param \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey|null $department
     * @return $this
     */
    public function setDepartment($department)
    {
        $this->department = $department;
        return $this;
    }

    /**
     * Getter for accessDevice
     *
     * @ElementName accessDevice
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDevice|null
     */
    public function getAccessDevice()
    {
        return $this->accessDevice;
    }

    /**
     * Setter for accessDevice
     *
     * @ElementName accessDevice
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDevice|null $accessDevice
     * @return $this
     */
    public function setAccessDevice($accessDevice)
    {
        $this->accessDevice = $accessDevice;
        return $this;
    }

    /**
     * Getter for maxActiveCalls
     *
     * @ElementName maxActiveCalls
     * @return int|null
     */
    public function getMaxActiveCalls()
    {
        return $this->maxActiveCalls;
    }

    /**
     * Setter for maxActiveCalls
     *
     * @ElementName maxActiveCalls
     * @param int|null $maxActiveCalls
     * @return $this
     */
    public function setMaxActiveCalls($maxActiveCalls)
    {
        $this->maxActiveCalls = $maxActiveCalls;
        return $this;
    }

    /**
     * Getter for maxIncomingCalls
     *
     * @ElementName maxIncomingCalls
     * @return int|null
     */
    public function getMaxIncomingCalls()
    {
        return $this->maxIncomingCalls;
    }

    /**
     * Setter for maxIncomingCalls
     *
     * @ElementName maxIncomingCalls
     * @param int|null $maxIncomingCalls
     * @return $this
     */
    public function setMaxIncomingCalls($maxIncomingCalls)
    {
        $this->maxIncomingCalls = $maxIncomingCalls;
        return $this;
    }

    /**
     * Getter for maxOutgoingCalls
     *
     * @ElementName maxOutgoingCalls
     * @return int|null
     */
    public function getMaxOutgoingCalls()
    {
        return $this->maxOutgoingCalls;
    }

    /**
     * Setter for maxOutgoingCalls
     *
     * @ElementName maxOutgoingCalls
     * @param int|null $maxOutgoingCalls
     * @return $this
     */
    public function setMaxOutgoingCalls($maxOutgoingCalls)
    {
        $this->maxOutgoingCalls = $maxOutgoingCalls;
        return $this;
    }

    /**
     * Getter for enableBursting
     *
     * @ElementName enableBursting
     * @return bool|null
     */
    public function getEnableBursting()
    {
        return $this->enableBursting;
    }

    /**
     * Setter for enableBursting
     *
     * @ElementName enableBursting
     * @param bool|null $enableBursting
     * @return $this
     */
    public function setEnableBursting($enableBursting)
    {
        $this->enableBursting = $enableBursting;
        return $this;
    }

    /**
     * Getter for burstingMaxActiveCalls
     *
     * @ElementName burstingMaxActiveCalls
     * @return int|null
     */
    public function getBurstingMaxActiveCalls()
    {
        return $this->burstingMaxActiveCalls;
    }

    /**
     * Setter for burstingMaxActiveCalls
     *
     * @ElementName burstingMaxActiveCalls
     * @param int|null $burstingMaxActiveCalls
     * @return $this
     */
    public function setBurstingMaxActiveCalls($burstingMaxActiveCalls)
    {
        $this->burstingMaxActiveCalls = $burstingMaxActiveCalls;
        return $this;
    }

    /**
     * Getter for burstingMaxIncomingCalls
     *
     * @ElementName burstingMaxIncomingCalls
     * @return int|null
     */
    public function getBurstingMaxIncomingCalls()
    {
        return $this->burstingMaxIncomingCalls;
    }

    /**
     * Setter for burstingMaxIncomingCalls
     *
     * @ElementName burstingMaxIncomingCalls
     * @param int|null $burstingMaxIncomingCalls
     * @return $this
     */
    public function setBurstingMaxIncomingCalls($burstingMaxIncomingCalls)
    {
        $this->burstingMaxIncomingCalls = $burstingMaxIncomingCalls;
        return $this;
    }

    /**
     * Getter for burstingMaxOutgoingCalls
     *
     * @ElementName burstingMaxOutgoingCalls
     * @return int|null
     */
    public function getBurstingMaxOutgoingCalls()
    {
        return $this->burstingMaxOutgoingCalls;
    }

    /**
     * Setter for burstingMaxOutgoingCalls
     *
     * @ElementName burstingMaxOutgoingCalls
     * @param int|null $burstingMaxOutgoingCalls
     * @return $this
     */
    public function setBurstingMaxOutgoingCalls($burstingMaxOutgoingCalls)
    {
        $this->burstingMaxOutgoingCalls = $burstingMaxOutgoingCalls;
        return $this;
    }

    /**
     * Getter for capacityExceededAction
     *
     * @ElementName capacityExceededAction
     * @return string|null
     */
    public function getCapacityExceededAction()
    {
        return $this->capacityExceededAction;
    }

    /**
     * Setter for capacityExceededAction
     *
     * @ElementName capacityExceededAction
     * @param string|null $capacityExceededAction
     * @return $this
     */
    public function setCapacityExceededAction($capacityExceededAction)
    {
        $this->capacityExceededAction = $capacityExceededAction;
        return $this;
    }

    /**
     * Getter for capacityExceededForwardAddress
     *
     * @ElementName capacityExceededForwardAddress
     * @return string|null
     */
    public function getCapacityExceededForwardAddress()
    {
        return $this->capacityExceededForwardAddress;
    }

    /**
     * Setter for capacityExceededForwardAddress
     *
     * @ElementName capacityExceededForwardAddress
     * @param string|null $capacityExceededForwardAddress
     * @return $this
     */
    public function setCapacityExceededForwardAddress($capacityExceededForwardAddress)
    {
        $this->capacityExceededForwardAddress = $capacityExceededForwardAddress;
        return $this;
    }

    /**
     * Getter for capacityExceededRerouteTrunkGroupKey
     *
     * @ElementName capacityExceededRerouteTrunkGroupKey
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey|null
     */
    public function getCapacityExceededRerouteTrunkGroupKey()
    {
        return $this->capacityExceededRerouteTrunkGroupKey;
    }

    /**
     * Setter for capacityExceededRerouteTrunkGroupKey
     *
     * @ElementName capacityExceededRerouteTrunkGroupKey
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey|null $capacityExceededRerouteTrunkGroupKey
     * @return $this
     */
    public function setCapacityExceededRerouteTrunkGroupKey($capacityExceededRerouteTrunkGroupKey)
    {
        $this->capacityExceededRerouteTrunkGroupKey = $capacityExceededRerouteTrunkGroupKey;
        return $this;
    }

    /**
     * Getter for capacityExceededTrapInitialCalls
     *
     * @ElementName capacityExceededTrapInitialCalls
     * @return int|null
     */
    public function getCapacityExceededTrapInitialCalls()
    {
        return $this->capacityExceededTrapInitialCalls;
    }

    /**
     * Setter for capacityExceededTrapInitialCalls
     *
     * @ElementName capacityExceededTrapInitialCalls
     * @param int|null $capacityExceededTrapInitialCalls
     * @return $this
     */
    public function setCapacityExceededTrapInitialCalls($capacityExceededTrapInitialCalls)
    {
        $this->capacityExceededTrapInitialCalls = $capacityExceededTrapInitialCalls;
        return $this;
    }

    /**
     * Getter for capacityExceededTrapOffsetCalls
     *
     * @ElementName capacityExceededTrapOffsetCalls
     * @return int|null
     */
    public function getCapacityExceededTrapOffsetCalls()
    {
        return $this->capacityExceededTrapOffsetCalls;
    }

    /**
     * Setter for capacityExceededTrapOffsetCalls
     *
     * @ElementName capacityExceededTrapOffsetCalls
     * @param int|null $capacityExceededTrapOffsetCalls
     * @return $this
     */
    public function setCapacityExceededTrapOffsetCalls($capacityExceededTrapOffsetCalls)
    {
        $this->capacityExceededTrapOffsetCalls = $capacityExceededTrapOffsetCalls;
        return $this;
    }

    /**
     * Getter for unreachableDestinationAction
     *
     * @ElementName unreachableDestinationAction
     * @return string|null
     */
    public function getUnreachableDestinationAction()
    {
        return $this->unreachableDestinationAction;
    }

    /**
     * Setter for unreachableDestinationAction
     *
     * @ElementName unreachableDestinationAction
     * @param string|null $unreachableDestinationAction
     * @return $this
     */
    public function setUnreachableDestinationAction($unreachableDestinationAction)
    {
        $this->unreachableDestinationAction = $unreachableDestinationAction;
        return $this;
    }

    /**
     * Getter for unreachableDestinationForwardAddress
     *
     * @ElementName unreachableDestinationForwardAddress
     * @return string|null
     */
    public function getUnreachableDestinationForwardAddress()
    {
        return $this->unreachableDestinationForwardAddress;
    }

    /**
     * Setter for unreachableDestinationForwardAddress
     *
     * @ElementName unreachableDestinationForwardAddress
     * @param string|null $unreachableDestinationForwardAddress
     * @return $this
     */
    public function setUnreachableDestinationForwardAddress($unreachableDestinationForwardAddress)
    {
        $this->unreachableDestinationForwardAddress = $unreachableDestinationForwardAddress;
        return $this;
    }

    /**
     * Getter for unreachableDestinationRerouteTrunkGroupKey
     *
     * @ElementName unreachableDestinationRerouteTrunkGroupKey
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey|null
     */
    public function getUnreachableDestinationRerouteTrunkGroupKey()
    {
        return $this->unreachableDestinationRerouteTrunkGroupKey;
    }

    /**
     * Setter for unreachableDestinationRerouteTrunkGroupKey
     *
     * @ElementName unreachableDestinationRerouteTrunkGroupKey
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey|null $unreachableDestinationRerouteTrunkGroupKey
     * @return $this
     */
    public function setUnreachableDestinationRerouteTrunkGroupKey($unreachableDestinationRerouteTrunkGroupKey)
    {
        $this->unreachableDestinationRerouteTrunkGroupKey = $unreachableDestinationRerouteTrunkGroupKey;
        return $this;
    }

    /**
     * Getter for unreachableDestinationTrapInitialCalls
     *
     * @ElementName unreachableDestinationTrapInitialCalls
     * @return int|null
     */
    public function getUnreachableDestinationTrapInitialCalls()
    {
        return $this->unreachableDestinationTrapInitialCalls;
    }

    /**
     * Setter for unreachableDestinationTrapInitialCalls
     *
     * @ElementName unreachableDestinationTrapInitialCalls
     * @param int|null $unreachableDestinationTrapInitialCalls
     * @return $this
     */
    public function setUnreachableDestinationTrapInitialCalls($unreachableDestinationTrapInitialCalls)
    {
        $this->unreachableDestinationTrapInitialCalls = $unreachableDestinationTrapInitialCalls;
        return $this;
    }

    /**
     * Getter for unreachableDestinationTrapOffsetCalls
     *
     * @ElementName unreachableDestinationTrapOffsetCalls
     * @return int|null
     */
    public function getUnreachableDestinationTrapOffsetCalls()
    {
        return $this->unreachableDestinationTrapOffsetCalls;
    }

    /**
     * Setter for unreachableDestinationTrapOffsetCalls
     *
     * @ElementName unreachableDestinationTrapOffsetCalls
     * @param int|null $unreachableDestinationTrapOffsetCalls
     * @return $this
     */
    public function setUnreachableDestinationTrapOffsetCalls($unreachableDestinationTrapOffsetCalls)
    {
        $this->unreachableDestinationTrapOffsetCalls = $unreachableDestinationTrapOffsetCalls;
        return $this;
    }

    /**
     * Getter for invitationTimeout
     *
     * @ElementName invitationTimeout
     * @return int|null
     */
    public function getInvitationTimeout()
    {
        return $this->invitationTimeout;
    }

    /**
     * Setter for invitationTimeout
     *
     * @ElementName invitationTimeout
     * @param int|null $invitationTimeout
     * @return $this
     */
    public function setInvitationTimeout($invitationTimeout)
    {
        $this->invitationTimeout = $invitationTimeout;
        return $this;
    }

    /**
     * Getter for requireAuthentication
     *
     * @ElementName requireAuthentication
     * @return bool|null
     */
    public function getRequireAuthentication()
    {
        return $this->requireAuthentication;
    }

    /**
     * Setter for requireAuthentication
     *
     * @ElementName requireAuthentication
     * @param bool|null $requireAuthentication
     * @return $this
     */
    public function setRequireAuthentication($requireAuthentication)
    {
        $this->requireAuthentication = $requireAuthentication;
        return $this;
    }

    /**
     * Getter for sipAuthenticationUserName
     *
     * @ElementName sipAuthenticationUserName
     * @return string|null
     */
    public function getSipAuthenticationUserName()
    {
        return $this->sipAuthenticationUserName;
    }

    /**
     * Setter for sipAuthenticationUserName
     *
     * @ElementName sipAuthenticationUserName
     * @param string|null $sipAuthenticationUserName
     * @return $this
     */
    public function setSipAuthenticationUserName($sipAuthenticationUserName)
    {
        $this->sipAuthenticationUserName = $sipAuthenticationUserName;
        return $this;
    }

    /**
     * Getter for hostedUserTable
     *
     * @ElementName hostedUserTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getHostedUserTable()
    {
        return $this->hostedUserTable;
    }

    /**
     * Setter for hostedUserTable
     *
     * @ElementName hostedUserTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $hostedUserTable
     * @return $this
     */
    public function setHostedUserTable($hostedUserTable)
    {
        $this->hostedUserTable = $hostedUserTable;
        return $this;
    }

    /**
     * Getter for trunkGroupIdentity
     *
     * @ElementName trunkGroupIdentity
     * @return string|null
     */
    public function getTrunkGroupIdentity()
    {
        return $this->trunkGroupIdentity;
    }

    /**
     * Setter for trunkGroupIdentity
     *
     * @ElementName trunkGroupIdentity
     * @param string|null $trunkGroupIdentity
     * @return $this
     */
    public function setTrunkGroupIdentity($trunkGroupIdentity)
    {
        $this->trunkGroupIdentity = $trunkGroupIdentity;
        return $this;
    }

    /**
     * Getter for otgDtgIdentity
     *
     * @ElementName otgDtgIdentity
     * @return string|null
     */
    public function getOtgDtgIdentity()
    {
        return $this->otgDtgIdentity;
    }

    /**
     * Setter for otgDtgIdentity
     *
     * @ElementName otgDtgIdentity
     * @param string|null $otgDtgIdentity
     * @return $this
     */
    public function setOtgDtgIdentity($otgDtgIdentity)
    {
        $this->otgDtgIdentity = $otgDtgIdentity;
        return $this;
    }

    /**
     * Getter for includeTrunkGroupIdentity
     *
     * @ElementName includeTrunkGroupIdentity
     * @return bool|null
     */
    public function getIncludeTrunkGroupIdentity()
    {
        return $this->includeTrunkGroupIdentity;
    }

    /**
     * Setter for includeTrunkGroupIdentity
     *
     * @ElementName includeTrunkGroupIdentity
     * @param bool|null $includeTrunkGroupIdentity
     * @return $this
     */
    public function setIncludeTrunkGroupIdentity($includeTrunkGroupIdentity)
    {
        $this->includeTrunkGroupIdentity = $includeTrunkGroupIdentity;
        return $this;
    }

    /**
     * Getter for includeDtgIdentity
     *
     * @ElementName includeDtgIdentity
     * @return bool|null
     */
    public function getIncludeDtgIdentity()
    {
        return $this->includeDtgIdentity;
    }

    /**
     * Setter for includeDtgIdentity
     *
     * @ElementName includeDtgIdentity
     * @param bool|null $includeDtgIdentity
     * @return $this
     */
    public function setIncludeDtgIdentity($includeDtgIdentity)
    {
        $this->includeDtgIdentity = $includeDtgIdentity;
        return $this;
    }

    /**
     * Getter for enableNetworkAddressIdentity
     *
     * @ElementName enableNetworkAddressIdentity
     * @return bool|null
     */
    public function getEnableNetworkAddressIdentity()
    {
        return $this->enableNetworkAddressIdentity;
    }

    /**
     * Setter for enableNetworkAddressIdentity
     *
     * @ElementName enableNetworkAddressIdentity
     * @param bool|null $enableNetworkAddressIdentity
     * @return $this
     */
    public function setEnableNetworkAddressIdentity($enableNetworkAddressIdentity)
    {
        $this->enableNetworkAddressIdentity = $enableNetworkAddressIdentity;
        return $this;
    }

    /**
     * Getter for allowUnscreenedCalls
     *
     * @ElementName allowUnscreenedCalls
     * @return bool|null
     */
    public function getAllowUnscreenedCalls()
    {
        return $this->allowUnscreenedCalls;
    }

    /**
     * Setter for allowUnscreenedCalls
     *
     * @ElementName allowUnscreenedCalls
     * @param bool|null $allowUnscreenedCalls
     * @return $this
     */
    public function setAllowUnscreenedCalls($allowUnscreenedCalls)
    {
        $this->allowUnscreenedCalls = $allowUnscreenedCalls;
        return $this;
    }

    /**
     * Getter for allowUnscreenedEmergencyCalls
     *
     * @ElementName allowUnscreenedEmergencyCalls
     * @return bool|null
     */
    public function getAllowUnscreenedEmergencyCalls()
    {
        return $this->allowUnscreenedEmergencyCalls;
    }

    /**
     * Setter for allowUnscreenedEmergencyCalls
     *
     * @ElementName allowUnscreenedEmergencyCalls
     * @param bool|null $allowUnscreenedEmergencyCalls
     * @return $this
     */
    public function setAllowUnscreenedEmergencyCalls($allowUnscreenedEmergencyCalls)
    {
        $this->allowUnscreenedEmergencyCalls = $allowUnscreenedEmergencyCalls;
        return $this;
    }

    /**
     * Getter for usePilotUserCallingLineIdentity
     *
     * @ElementName usePilotUserCallingLineIdentity
     * @return bool|null
     */
    public function getUsePilotUserCallingLineIdentity()
    {
        return $this->usePilotUserCallingLineIdentity;
    }

    /**
     * Setter for usePilotUserCallingLineIdentity
     *
     * @ElementName usePilotUserCallingLineIdentity
     * @param bool|null $usePilotUserCallingLineIdentity
     * @return $this
     */
    public function setUsePilotUserCallingLineIdentity($usePilotUserCallingLineIdentity)
    {
        $this->usePilotUserCallingLineIdentity = $usePilotUserCallingLineIdentity;
        return $this;
    }

    /**
     * Getter for usePilotUserChargeNumber
     *
     * @ElementName usePilotUserChargeNumber
     * @return bool|null
     */
    public function getUsePilotUserChargeNumber()
    {
        return $this->usePilotUserChargeNumber;
    }

    /**
     * Setter for usePilotUserChargeNumber
     *
     * @ElementName usePilotUserChargeNumber
     * @param bool|null $usePilotUserChargeNumber
     * @return $this
     */
    public function setUsePilotUserChargeNumber($usePilotUserChargeNumber)
    {
        $this->usePilotUserChargeNumber = $usePilotUserChargeNumber;
        return $this;
    }

    /**
     * Getter for callForwardingAlwaysAction
     *
     * @ElementName callForwardingAlwaysAction
     * @return string|null
     */
    public function getCallForwardingAlwaysAction()
    {
        return $this->callForwardingAlwaysAction;
    }

    /**
     * Setter for callForwardingAlwaysAction
     *
     * @ElementName callForwardingAlwaysAction
     * @param string|null $callForwardingAlwaysAction
     * @return $this
     */
    public function setCallForwardingAlwaysAction($callForwardingAlwaysAction)
    {
        $this->callForwardingAlwaysAction = $callForwardingAlwaysAction;
        return $this;
    }

    /**
     * Getter for callForwardingAlwaysForwardAddress
     *
     * @ElementName callForwardingAlwaysForwardAddress
     * @return string|null
     */
    public function getCallForwardingAlwaysForwardAddress()
    {
        return $this->callForwardingAlwaysForwardAddress;
    }

    /**
     * Setter for callForwardingAlwaysForwardAddress
     *
     * @ElementName callForwardingAlwaysForwardAddress
     * @param string|null $callForwardingAlwaysForwardAddress
     * @return $this
     */
    public function setCallForwardingAlwaysForwardAddress($callForwardingAlwaysForwardAddress)
    {
        $this->callForwardingAlwaysForwardAddress = $callForwardingAlwaysForwardAddress;
        return $this;
    }

    /**
     * Getter for callForwardingAlwaysRerouteTrunkGroupKey
     *
     * @ElementName callForwardingAlwaysRerouteTrunkGroupKey
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey|null
     */
    public function getCallForwardingAlwaysRerouteTrunkGroupKey()
    {
        return $this->callForwardingAlwaysRerouteTrunkGroupKey;
    }

    /**
     * Setter for callForwardingAlwaysRerouteTrunkGroupKey
     *
     * @ElementName callForwardingAlwaysRerouteTrunkGroupKey
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey|null $callForwardingAlwaysRerouteTrunkGroupKey
     * @return $this
     */
    public function setCallForwardingAlwaysRerouteTrunkGroupKey($callForwardingAlwaysRerouteTrunkGroupKey)
    {
        $this->callForwardingAlwaysRerouteTrunkGroupKey = $callForwardingAlwaysRerouteTrunkGroupKey;
        return $this;
    }


}
