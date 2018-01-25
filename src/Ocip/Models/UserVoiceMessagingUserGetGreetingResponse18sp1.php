<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserVoiceMessagingUserGetGreetingResponse18sp1
 *
 * Response to UserVoiceMessagingUserGetGreetingRequest18sp1.
 *         Contains the greeting configuration for a user's voice messaging.
 *         The following elements are only used in AS data mode:
 *           disableMessageDeposit, value "false" is returned in XS data mode
 *           disableMessageDepositAction, value "Disconnect" is returned in XS data
 * mode
 *           extendedAwayEnabled, value "false" is returned in XS data mode
 *           extendedAwayDisableMessageDeposit, value "true" is returned in XS data
 * mode
 *           
 *         The following elements are only used in AS data mode and not returned in
 * XS data mode:
 *           greetingOnlyForwardDestination
 *           extendedAwayAudioFile
 *           extendedAwayAudioMediaType
 *           extendedAwayVideoFile
 *           extendedAwayVideoMediaType
 *           
 *           Replaced by: UserVoiceMessagingUserGetGreetingResponse20 in AS data
 * mode
 */
class UserVoiceMessagingUserGetGreetingResponse18sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName busyAnnouncementSelection
     * @var string|null
     */
    private $busyAnnouncementSelection = null;

    /**
     * @ElementName busyPersonalAudioFile
     * @var string|null
     */
    private $busyPersonalAudioFile = null;

    /**
     * @ElementName busyPersonalAudioMediaType
     * @var string|null
     */
    private $busyPersonalAudioMediaType = null;

    /**
     * @ElementName busyPersonalVideoFile
     * @var string|null
     */
    private $busyPersonalVideoFile = null;

    /**
     * @ElementName busyPersonalVideoMediaType
     * @var string|null
     */
    private $busyPersonalVideoMediaType = null;

    /**
     * @ElementName noAnswerAnnouncementSelection
     * @var string|null
     */
    private $noAnswerAnnouncementSelection = null;

    /**
     * @ElementName noAnswerPersonalAudioFile
     * @var string|null
     */
    private $noAnswerPersonalAudioFile = null;

    /**
     * @ElementName noAnswerPersonalAudioMediaType
     * @var string|null
     */
    private $noAnswerPersonalAudioMediaType = null;

    /**
     * @ElementName noAnswerPersonalVideoFile
     * @var string|null
     */
    private $noAnswerPersonalVideoFile = null;

    /**
     * @ElementName noAnswerPersonalVideoMediaType
     * @var string|null
     */
    private $noAnswerPersonalVideoMediaType = null;

    /**
     * @ElementName extendedAwayEnabled
     * @var bool|null
     */
    private $extendedAwayEnabled = null;

    /**
     * @ElementName extendedAwayDisableMessageDeposit
     * @var bool|null
     */
    private $extendedAwayDisableMessageDeposit = null;

    /**
     * @ElementName extendedAwayAudioFile
     * @var string|null
     */
    private $extendedAwayAudioFile = null;

    /**
     * @ElementName extendedAwayAudioMediaType
     * @var string|null
     */
    private $extendedAwayAudioMediaType = null;

    /**
     * @ElementName extendedAwayVideoFile
     * @var string|null
     */
    private $extendedAwayVideoFile = null;

    /**
     * @ElementName extendedAwayVideoMediaType
     * @var string|null
     */
    private $extendedAwayVideoMediaType = null;

    /**
     * @ElementName noAnswerAlternateGreeting01
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingRead16|null
     */
    private $noAnswerAlternateGreeting01 = null;

    /**
     * @ElementName noAnswerAlternateGreeting02
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingRead16|null
     */
    private $noAnswerAlternateGreeting02 = null;

    /**
     * @ElementName noAnswerAlternateGreeting03
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingRead16|null
     */
    private $noAnswerAlternateGreeting03 = null;

    /**
     * @ElementName noAnswerNumberOfRings
     * @var int|null
     */
    private $noAnswerNumberOfRings = null;

    /**
     * @ElementName disableMessageDeposit
     * @var bool|null
     */
    private $disableMessageDeposit = null;

    /**
     * @ElementName disableMessageDepositAction
     * @var string|null
     */
    private $disableMessageDepositAction = null;

    /**
     * @ElementName greetingOnlyForwardDestination
     * @var string|null
     */
    private $greetingOnlyForwardDestination = null;

    /**
     * Getter for busyAnnouncementSelection
     *
     * @ElementName busyAnnouncementSelection
     * @return string|null
     */
    public function getBusyAnnouncementSelection()
    {
        return $this->busyAnnouncementSelection;
    }

    /**
     * Setter for busyAnnouncementSelection
     *
     * @ElementName busyAnnouncementSelection
     * @param string|null $busyAnnouncementSelection
     * @return $this
     */
    public function setBusyAnnouncementSelection($busyAnnouncementSelection)
    {
        $this->busyAnnouncementSelection = $busyAnnouncementSelection;
        return $this;
    }

    /**
     * Getter for busyPersonalAudioFile
     *
     * @ElementName busyPersonalAudioFile
     * @return string|null
     */
    public function getBusyPersonalAudioFile()
    {
        return $this->busyPersonalAudioFile;
    }

    /**
     * Setter for busyPersonalAudioFile
     *
     * @ElementName busyPersonalAudioFile
     * @param string|null $busyPersonalAudioFile
     * @return $this
     */
    public function setBusyPersonalAudioFile($busyPersonalAudioFile)
    {
        $this->busyPersonalAudioFile = $busyPersonalAudioFile;
        return $this;
    }

    /**
     * Getter for busyPersonalAudioMediaType
     *
     * @ElementName busyPersonalAudioMediaType
     * @return string|null
     */
    public function getBusyPersonalAudioMediaType()
    {
        return $this->busyPersonalAudioMediaType;
    }

    /**
     * Setter for busyPersonalAudioMediaType
     *
     * @ElementName busyPersonalAudioMediaType
     * @param string|null $busyPersonalAudioMediaType
     * @return $this
     */
    public function setBusyPersonalAudioMediaType($busyPersonalAudioMediaType)
    {
        $this->busyPersonalAudioMediaType = $busyPersonalAudioMediaType;
        return $this;
    }

    /**
     * Getter for busyPersonalVideoFile
     *
     * @ElementName busyPersonalVideoFile
     * @return string|null
     */
    public function getBusyPersonalVideoFile()
    {
        return $this->busyPersonalVideoFile;
    }

    /**
     * Setter for busyPersonalVideoFile
     *
     * @ElementName busyPersonalVideoFile
     * @param string|null $busyPersonalVideoFile
     * @return $this
     */
    public function setBusyPersonalVideoFile($busyPersonalVideoFile)
    {
        $this->busyPersonalVideoFile = $busyPersonalVideoFile;
        return $this;
    }

    /**
     * Getter for busyPersonalVideoMediaType
     *
     * @ElementName busyPersonalVideoMediaType
     * @return string|null
     */
    public function getBusyPersonalVideoMediaType()
    {
        return $this->busyPersonalVideoMediaType;
    }

    /**
     * Setter for busyPersonalVideoMediaType
     *
     * @ElementName busyPersonalVideoMediaType
     * @param string|null $busyPersonalVideoMediaType
     * @return $this
     */
    public function setBusyPersonalVideoMediaType($busyPersonalVideoMediaType)
    {
        $this->busyPersonalVideoMediaType = $busyPersonalVideoMediaType;
        return $this;
    }

    /**
     * Getter for noAnswerAnnouncementSelection
     *
     * @ElementName noAnswerAnnouncementSelection
     * @return string|null
     */
    public function getNoAnswerAnnouncementSelection()
    {
        return $this->noAnswerAnnouncementSelection;
    }

    /**
     * Setter for noAnswerAnnouncementSelection
     *
     * @ElementName noAnswerAnnouncementSelection
     * @param string|null $noAnswerAnnouncementSelection
     * @return $this
     */
    public function setNoAnswerAnnouncementSelection($noAnswerAnnouncementSelection)
    {
        $this->noAnswerAnnouncementSelection = $noAnswerAnnouncementSelection;
        return $this;
    }

    /**
     * Getter for noAnswerPersonalAudioFile
     *
     * @ElementName noAnswerPersonalAudioFile
     * @return string|null
     */
    public function getNoAnswerPersonalAudioFile()
    {
        return $this->noAnswerPersonalAudioFile;
    }

    /**
     * Setter for noAnswerPersonalAudioFile
     *
     * @ElementName noAnswerPersonalAudioFile
     * @param string|null $noAnswerPersonalAudioFile
     * @return $this
     */
    public function setNoAnswerPersonalAudioFile($noAnswerPersonalAudioFile)
    {
        $this->noAnswerPersonalAudioFile = $noAnswerPersonalAudioFile;
        return $this;
    }

    /**
     * Getter for noAnswerPersonalAudioMediaType
     *
     * @ElementName noAnswerPersonalAudioMediaType
     * @return string|null
     */
    public function getNoAnswerPersonalAudioMediaType()
    {
        return $this->noAnswerPersonalAudioMediaType;
    }

    /**
     * Setter for noAnswerPersonalAudioMediaType
     *
     * @ElementName noAnswerPersonalAudioMediaType
     * @param string|null $noAnswerPersonalAudioMediaType
     * @return $this
     */
    public function setNoAnswerPersonalAudioMediaType($noAnswerPersonalAudioMediaType)
    {
        $this->noAnswerPersonalAudioMediaType = $noAnswerPersonalAudioMediaType;
        return $this;
    }

    /**
     * Getter for noAnswerPersonalVideoFile
     *
     * @ElementName noAnswerPersonalVideoFile
     * @return string|null
     */
    public function getNoAnswerPersonalVideoFile()
    {
        return $this->noAnswerPersonalVideoFile;
    }

    /**
     * Setter for noAnswerPersonalVideoFile
     *
     * @ElementName noAnswerPersonalVideoFile
     * @param string|null $noAnswerPersonalVideoFile
     * @return $this
     */
    public function setNoAnswerPersonalVideoFile($noAnswerPersonalVideoFile)
    {
        $this->noAnswerPersonalVideoFile = $noAnswerPersonalVideoFile;
        return $this;
    }

    /**
     * Getter for noAnswerPersonalVideoMediaType
     *
     * @ElementName noAnswerPersonalVideoMediaType
     * @return string|null
     */
    public function getNoAnswerPersonalVideoMediaType()
    {
        return $this->noAnswerPersonalVideoMediaType;
    }

    /**
     * Setter for noAnswerPersonalVideoMediaType
     *
     * @ElementName noAnswerPersonalVideoMediaType
     * @param string|null $noAnswerPersonalVideoMediaType
     * @return $this
     */
    public function setNoAnswerPersonalVideoMediaType($noAnswerPersonalVideoMediaType)
    {
        $this->noAnswerPersonalVideoMediaType = $noAnswerPersonalVideoMediaType;
        return $this;
    }

    /**
     * Getter for extendedAwayEnabled
     *
     * @ElementName extendedAwayEnabled
     * @return bool|null
     */
    public function getExtendedAwayEnabled()
    {
        return $this->extendedAwayEnabled;
    }

    /**
     * Setter for extendedAwayEnabled
     *
     * @ElementName extendedAwayEnabled
     * @param bool|null $extendedAwayEnabled
     * @return $this
     */
    public function setExtendedAwayEnabled($extendedAwayEnabled)
    {
        $this->extendedAwayEnabled = $extendedAwayEnabled;
        return $this;
    }

    /**
     * Getter for extendedAwayDisableMessageDeposit
     *
     * @ElementName extendedAwayDisableMessageDeposit
     * @return bool|null
     */
    public function getExtendedAwayDisableMessageDeposit()
    {
        return $this->extendedAwayDisableMessageDeposit;
    }

    /**
     * Setter for extendedAwayDisableMessageDeposit
     *
     * @ElementName extendedAwayDisableMessageDeposit
     * @param bool|null $extendedAwayDisableMessageDeposit
     * @return $this
     */
    public function setExtendedAwayDisableMessageDeposit($extendedAwayDisableMessageDeposit)
    {
        $this->extendedAwayDisableMessageDeposit = $extendedAwayDisableMessageDeposit;
        return $this;
    }

    /**
     * Getter for extendedAwayAudioFile
     *
     * @ElementName extendedAwayAudioFile
     * @return string|null
     */
    public function getExtendedAwayAudioFile()
    {
        return $this->extendedAwayAudioFile;
    }

    /**
     * Setter for extendedAwayAudioFile
     *
     * @ElementName extendedAwayAudioFile
     * @param string|null $extendedAwayAudioFile
     * @return $this
     */
    public function setExtendedAwayAudioFile($extendedAwayAudioFile)
    {
        $this->extendedAwayAudioFile = $extendedAwayAudioFile;
        return $this;
    }

    /**
     * Getter for extendedAwayAudioMediaType
     *
     * @ElementName extendedAwayAudioMediaType
     * @return string|null
     */
    public function getExtendedAwayAudioMediaType()
    {
        return $this->extendedAwayAudioMediaType;
    }

    /**
     * Setter for extendedAwayAudioMediaType
     *
     * @ElementName extendedAwayAudioMediaType
     * @param string|null $extendedAwayAudioMediaType
     * @return $this
     */
    public function setExtendedAwayAudioMediaType($extendedAwayAudioMediaType)
    {
        $this->extendedAwayAudioMediaType = $extendedAwayAudioMediaType;
        return $this;
    }

    /**
     * Getter for extendedAwayVideoFile
     *
     * @ElementName extendedAwayVideoFile
     * @return string|null
     */
    public function getExtendedAwayVideoFile()
    {
        return $this->extendedAwayVideoFile;
    }

    /**
     * Setter for extendedAwayVideoFile
     *
     * @ElementName extendedAwayVideoFile
     * @param string|null $extendedAwayVideoFile
     * @return $this
     */
    public function setExtendedAwayVideoFile($extendedAwayVideoFile)
    {
        $this->extendedAwayVideoFile = $extendedAwayVideoFile;
        return $this;
    }

    /**
     * Getter for extendedAwayVideoMediaType
     *
     * @ElementName extendedAwayVideoMediaType
     * @return string|null
     */
    public function getExtendedAwayVideoMediaType()
    {
        return $this->extendedAwayVideoMediaType;
    }

    /**
     * Setter for extendedAwayVideoMediaType
     *
     * @ElementName extendedAwayVideoMediaType
     * @param string|null $extendedAwayVideoMediaType
     * @return $this
     */
    public function setExtendedAwayVideoMediaType($extendedAwayVideoMediaType)
    {
        $this->extendedAwayVideoMediaType = $extendedAwayVideoMediaType;
        return $this;
    }

    /**
     * Getter for noAnswerAlternateGreeting01
     *
     * @ElementName noAnswerAlternateGreeting01
     * @return \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingRead16|null
     */
    public function getNoAnswerAlternateGreeting01()
    {
        return $this->noAnswerAlternateGreeting01;
    }

    /**
     * Setter for noAnswerAlternateGreeting01
     *
     * @ElementName noAnswerAlternateGreeting01
     * @param \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingRead16|null $noAnswerAlternateGreeting01
     * @return $this
     */
    public function setNoAnswerAlternateGreeting01($noAnswerAlternateGreeting01)
    {
        $this->noAnswerAlternateGreeting01 = $noAnswerAlternateGreeting01;
        return $this;
    }

    /**
     * Getter for noAnswerAlternateGreeting02
     *
     * @ElementName noAnswerAlternateGreeting02
     * @return \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingRead16|null
     */
    public function getNoAnswerAlternateGreeting02()
    {
        return $this->noAnswerAlternateGreeting02;
    }

    /**
     * Setter for noAnswerAlternateGreeting02
     *
     * @ElementName noAnswerAlternateGreeting02
     * @param \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingRead16|null $noAnswerAlternateGreeting02
     * @return $this
     */
    public function setNoAnswerAlternateGreeting02($noAnswerAlternateGreeting02)
    {
        $this->noAnswerAlternateGreeting02 = $noAnswerAlternateGreeting02;
        return $this;
    }

    /**
     * Getter for noAnswerAlternateGreeting03
     *
     * @ElementName noAnswerAlternateGreeting03
     * @return \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingRead16|null
     */
    public function getNoAnswerAlternateGreeting03()
    {
        return $this->noAnswerAlternateGreeting03;
    }

    /**
     * Setter for noAnswerAlternateGreeting03
     *
     * @ElementName noAnswerAlternateGreeting03
     * @param \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingRead16|null $noAnswerAlternateGreeting03
     * @return $this
     */
    public function setNoAnswerAlternateGreeting03($noAnswerAlternateGreeting03)
    {
        $this->noAnswerAlternateGreeting03 = $noAnswerAlternateGreeting03;
        return $this;
    }

    /**
     * Getter for noAnswerNumberOfRings
     *
     * @ElementName noAnswerNumberOfRings
     * @return int|null
     */
    public function getNoAnswerNumberOfRings()
    {
        return $this->noAnswerNumberOfRings;
    }

    /**
     * Setter for noAnswerNumberOfRings
     *
     * @ElementName noAnswerNumberOfRings
     * @param int|null $noAnswerNumberOfRings
     * @return $this
     */
    public function setNoAnswerNumberOfRings($noAnswerNumberOfRings)
    {
        $this->noAnswerNumberOfRings = $noAnswerNumberOfRings;
        return $this;
    }

    /**
     * Getter for disableMessageDeposit
     *
     * @ElementName disableMessageDeposit
     * @return bool|null
     */
    public function getDisableMessageDeposit()
    {
        return $this->disableMessageDeposit;
    }

    /**
     * Setter for disableMessageDeposit
     *
     * @ElementName disableMessageDeposit
     * @param bool|null $disableMessageDeposit
     * @return $this
     */
    public function setDisableMessageDeposit($disableMessageDeposit)
    {
        $this->disableMessageDeposit = $disableMessageDeposit;
        return $this;
    }

    /**
     * Getter for disableMessageDepositAction
     *
     * @ElementName disableMessageDepositAction
     * @return string|null
     */
    public function getDisableMessageDepositAction()
    {
        return $this->disableMessageDepositAction;
    }

    /**
     * Setter for disableMessageDepositAction
     *
     * @ElementName disableMessageDepositAction
     * @param string|null $disableMessageDepositAction
     * @return $this
     */
    public function setDisableMessageDepositAction($disableMessageDepositAction)
    {
        $this->disableMessageDepositAction = $disableMessageDepositAction;
        return $this;
    }

    /**
     * Getter for greetingOnlyForwardDestination
     *
     * @ElementName greetingOnlyForwardDestination
     * @return string|null
     */
    public function getGreetingOnlyForwardDestination()
    {
        return $this->greetingOnlyForwardDestination;
    }

    /**
     * Setter for greetingOnlyForwardDestination
     *
     * @ElementName greetingOnlyForwardDestination
     * @param string|null $greetingOnlyForwardDestination
     * @return $this
     */
    public function setGreetingOnlyForwardDestination($greetingOnlyForwardDestination)
    {
        $this->greetingOnlyForwardDestination = $greetingOnlyForwardDestination;
        return $this;
    }


}
