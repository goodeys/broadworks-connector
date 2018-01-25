<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSharedCallAppearanceModifyRequest
 *
 * Modify the user's Shared Call Appearance service setting.
 *          The response is either a SuccessResponse or an ErrorResponse.
 *          
 *          The following elements are only used in XS data mode and ignored in AS
 * data mode:
 *            useUserPrimaryWithAlternateCallsSetting
 *            allowSimultaneousPrimaryAndAlternate
 *            restrictCallRetrieveOfPrimary
 *            restrictCallBridgingOfPrimary
 */
class UserSharedCallAppearanceModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName alertAllAppearancesForClickToDialCalls
     * @var bool|null
     */
    private $alertAllAppearancesForClickToDialCalls = null;

    /**
     * @ElementName alertAllAppearancesForGroupPagingCalls
     * @var bool|null
     */
    private $alertAllAppearancesForGroupPagingCalls = null;

    /**
     * @ElementName allowSCACallRetrieve
     * @var bool|null
     */
    private $allowSCACallRetrieve = null;

    /**
     * @ElementName multipleCallArrangementIsActive
     * @var bool|null
     */
    private $multipleCallArrangementIsActive = null;

    /**
     * @ElementName allowBridgingBetweenLocations
     * @var bool|null
     */
    private $allowBridgingBetweenLocations = null;

    /**
     * @ElementName bridgeWarningTone
     * @var string|null
     */
    private $bridgeWarningTone = null;

    /**
     * @ElementName enableCallParkNotification
     * @var bool|null
     */
    private $enableCallParkNotification = null;

    /**
     * @ElementName useUserPrimaryWithAlternateCallsSetting
     * @var bool|null
     */
    private $useUserPrimaryWithAlternateCallsSetting = null;

    /**
     * @ElementName allowSimultaneousPrimaryAndAlternateCalls
     * @var bool|null
     */
    private $allowSimultaneousPrimaryAndAlternateCalls = null;

    /**
     * @ElementName restrictCallRetrieveOfPrimaryCall
     * @var bool|null
     */
    private $restrictCallRetrieveOfPrimaryCall = null;

    /**
     * @ElementName restrictCallBridgingOfPrimaryCall
     * @var bool|null
     */
    private $restrictCallBridgingOfPrimaryCall = null;

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * Getter for alertAllAppearancesForClickToDialCalls
     *
     * @ElementName alertAllAppearancesForClickToDialCalls
     * @return bool|null
     */
    public function getAlertAllAppearancesForClickToDialCalls()
    {
        return $this->alertAllAppearancesForClickToDialCalls;
    }

    /**
     * Setter for alertAllAppearancesForClickToDialCalls
     *
     * @ElementName alertAllAppearancesForClickToDialCalls
     * @param bool|null $alertAllAppearancesForClickToDialCalls
     * @return $this
     */
    public function setAlertAllAppearancesForClickToDialCalls($alertAllAppearancesForClickToDialCalls)
    {
        $this->alertAllAppearancesForClickToDialCalls = $alertAllAppearancesForClickToDialCalls;
        return $this;
    }

    /**
     * Getter for alertAllAppearancesForGroupPagingCalls
     *
     * @ElementName alertAllAppearancesForGroupPagingCalls
     * @return bool|null
     */
    public function getAlertAllAppearancesForGroupPagingCalls()
    {
        return $this->alertAllAppearancesForGroupPagingCalls;
    }

    /**
     * Setter for alertAllAppearancesForGroupPagingCalls
     *
     * @ElementName alertAllAppearancesForGroupPagingCalls
     * @param bool|null $alertAllAppearancesForGroupPagingCalls
     * @return $this
     */
    public function setAlertAllAppearancesForGroupPagingCalls($alertAllAppearancesForGroupPagingCalls)
    {
        $this->alertAllAppearancesForGroupPagingCalls = $alertAllAppearancesForGroupPagingCalls;
        return $this;
    }

    /**
     * Getter for allowSCACallRetrieve
     *
     * @ElementName allowSCACallRetrieve
     * @return bool|null
     */
    public function getAllowSCACallRetrieve()
    {
        return $this->allowSCACallRetrieve;
    }

    /**
     * Setter for allowSCACallRetrieve
     *
     * @ElementName allowSCACallRetrieve
     * @param bool|null $allowSCACallRetrieve
     * @return $this
     */
    public function setAllowSCACallRetrieve($allowSCACallRetrieve)
    {
        $this->allowSCACallRetrieve = $allowSCACallRetrieve;
        return $this;
    }

    /**
     * Getter for multipleCallArrangementIsActive
     *
     * @ElementName multipleCallArrangementIsActive
     * @return bool|null
     */
    public function getMultipleCallArrangementIsActive()
    {
        return $this->multipleCallArrangementIsActive;
    }

    /**
     * Setter for multipleCallArrangementIsActive
     *
     * @ElementName multipleCallArrangementIsActive
     * @param bool|null $multipleCallArrangementIsActive
     * @return $this
     */
    public function setMultipleCallArrangementIsActive($multipleCallArrangementIsActive)
    {
        $this->multipleCallArrangementIsActive = $multipleCallArrangementIsActive;
        return $this;
    }

    /**
     * Getter for allowBridgingBetweenLocations
     *
     * @ElementName allowBridgingBetweenLocations
     * @return bool|null
     */
    public function getAllowBridgingBetweenLocations()
    {
        return $this->allowBridgingBetweenLocations;
    }

    /**
     * Setter for allowBridgingBetweenLocations
     *
     * @ElementName allowBridgingBetweenLocations
     * @param bool|null $allowBridgingBetweenLocations
     * @return $this
     */
    public function setAllowBridgingBetweenLocations($allowBridgingBetweenLocations)
    {
        $this->allowBridgingBetweenLocations = $allowBridgingBetweenLocations;
        return $this;
    }

    /**
     * Getter for bridgeWarningTone
     *
     * @ElementName bridgeWarningTone
     * @return string|null
     */
    public function getBridgeWarningTone()
    {
        return $this->bridgeWarningTone;
    }

    /**
     * Setter for bridgeWarningTone
     *
     * @ElementName bridgeWarningTone
     * @param string|null $bridgeWarningTone
     * @return $this
     */
    public function setBridgeWarningTone($bridgeWarningTone)
    {
        $this->bridgeWarningTone = $bridgeWarningTone;
        return $this;
    }

    /**
     * Getter for enableCallParkNotification
     *
     * @ElementName enableCallParkNotification
     * @return bool|null
     */
    public function getEnableCallParkNotification()
    {
        return $this->enableCallParkNotification;
    }

    /**
     * Setter for enableCallParkNotification
     *
     * @ElementName enableCallParkNotification
     * @param bool|null $enableCallParkNotification
     * @return $this
     */
    public function setEnableCallParkNotification($enableCallParkNotification)
    {
        $this->enableCallParkNotification = $enableCallParkNotification;
        return $this;
    }

    /**
     * Getter for useUserPrimaryWithAlternateCallsSetting
     *
     * @ElementName useUserPrimaryWithAlternateCallsSetting
     * @return bool|null
     */
    public function getUseUserPrimaryWithAlternateCallsSetting()
    {
        return $this->useUserPrimaryWithAlternateCallsSetting;
    }

    /**
     * Setter for useUserPrimaryWithAlternateCallsSetting
     *
     * @ElementName useUserPrimaryWithAlternateCallsSetting
     * @param bool|null $useUserPrimaryWithAlternateCallsSetting
     * @return $this
     */
    public function setUseUserPrimaryWithAlternateCallsSetting($useUserPrimaryWithAlternateCallsSetting)
    {
        $this->useUserPrimaryWithAlternateCallsSetting = $useUserPrimaryWithAlternateCallsSetting;
        return $this;
    }

    /**
     * Getter for allowSimultaneousPrimaryAndAlternateCalls
     *
     * @ElementName allowSimultaneousPrimaryAndAlternateCalls
     * @return bool|null
     */
    public function getAllowSimultaneousPrimaryAndAlternateCalls()
    {
        return $this->allowSimultaneousPrimaryAndAlternateCalls;
    }

    /**
     * Setter for allowSimultaneousPrimaryAndAlternateCalls
     *
     * @ElementName allowSimultaneousPrimaryAndAlternateCalls
     * @param bool|null $allowSimultaneousPrimaryAndAlternateCalls
     * @return $this
     */
    public function setAllowSimultaneousPrimaryAndAlternateCalls($allowSimultaneousPrimaryAndAlternateCalls)
    {
        $this->allowSimultaneousPrimaryAndAlternateCalls = $allowSimultaneousPrimaryAndAlternateCalls;
        return $this;
    }

    /**
     * Getter for restrictCallRetrieveOfPrimaryCall
     *
     * @ElementName restrictCallRetrieveOfPrimaryCall
     * @return bool|null
     */
    public function getRestrictCallRetrieveOfPrimaryCall()
    {
        return $this->restrictCallRetrieveOfPrimaryCall;
    }

    /**
     * Setter for restrictCallRetrieveOfPrimaryCall
     *
     * @ElementName restrictCallRetrieveOfPrimaryCall
     * @param bool|null $restrictCallRetrieveOfPrimaryCall
     * @return $this
     */
    public function setRestrictCallRetrieveOfPrimaryCall($restrictCallRetrieveOfPrimaryCall)
    {
        $this->restrictCallRetrieveOfPrimaryCall = $restrictCallRetrieveOfPrimaryCall;
        return $this;
    }

    /**
     * Getter for restrictCallBridgingOfPrimaryCall
     *
     * @ElementName restrictCallBridgingOfPrimaryCall
     * @return bool|null
     */
    public function getRestrictCallBridgingOfPrimaryCall()
    {
        return $this->restrictCallBridgingOfPrimaryCall;
    }

    /**
     * Setter for restrictCallBridgingOfPrimaryCall
     *
     * @ElementName restrictCallBridgingOfPrimaryCall
     * @param bool|null $restrictCallBridgingOfPrimaryCall
     * @return $this
     */
    public function setRestrictCallBridgingOfPrimaryCall($restrictCallBridgingOfPrimaryCall)
    {
        $this->restrictCallBridgingOfPrimaryCall = $restrictCallBridgingOfPrimaryCall;
        return $this;
    }


}
