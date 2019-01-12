<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterGetAnnouncementResponse17
 *
 * Response to the GroupCallCenterGetAnnouncementRequest17.
 *         
 *         Replaced by GroupCallCenterGetAnnouncementResponse17sp4
 *
 * @see GroupCallCenterGetAnnouncementRequest17
 * @see GroupCallCenterGetAnnouncementResponse17sp4
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:23813","type":"sequence"}]
 */
class GroupCallCenterGetAnnouncementResponse17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName playEntranceMessage
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:23813
     * @var bool|null
     */
    private $playEntranceMessage = null;

    /**
     * @ElementName mandatoryEntranceMessage
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:23813
     * @var bool|null
     */
    private $mandatoryEntranceMessage = null;

    /**
     * @ElementName entranceAudioMessageSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     * @Group ab0042aa512abc10edb3c55e4b416b0b:23813
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    private $entranceAudioMessageSelection = null;

    /**
     * @ElementName entranceMessageAudioUrlList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:23813
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList|null
     */
    private $entranceMessageAudioUrlList = null;

    /**
     * @ElementName entranceMessageAudioFileList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementDescriptionList
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:23813
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementDescriptionList|null
     */
    private $entranceMessageAudioFileList = null;

    /**
     * @ElementName entranceMessageAudioMediaTypeList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementMediaFileTypeList
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:23813
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementMediaFileTypeList|null
     */
    private $entranceMessageAudioMediaTypeList = null;

    /**
     * @ElementName entranceVideoMessageSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:23813
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    private $entranceVideoMessageSelection = null;

    /**
     * @ElementName entranceMessageVideoUrlList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:23813
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList|null
     */
    private $entranceMessageVideoUrlList = null;

    /**
     * @ElementName entranceMessageVideoFileList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementDescriptionList
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:23813
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementDescriptionList|null
     */
    private $entranceMessageVideoFileList = null;

    /**
     * @ElementName entranceMessageVideoMediaTypeList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementMediaFileTypeList
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:23813
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementMediaFileTypeList|null
     */
    private $entranceMessageVideoMediaTypeList = null;

    /**
     * @ElementName playPeriodicComfortMessage
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:23813
     * @var bool|null
     */
    private $playPeriodicComfortMessage = null;

    /**
     * @ElementName timeBetweenComfortMessagesSeconds
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:23813
     * @var int|null
     */
    private $timeBetweenComfortMessagesSeconds = null;

    /**
     * @ElementName periodicComfortAudioMessageSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     * @Group ab0042aa512abc10edb3c55e4b416b0b:23813
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    private $periodicComfortAudioMessageSelection = null;

    /**
     * @ElementName periodicComfortMessageAudioUrlList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:23813
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList|null
     */
    private $periodicComfortMessageAudioUrlList = null;

    /**
     * @ElementName periodicComfortMessageAudioFileList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementDescriptionList
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:23813
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementDescriptionList|null
     */
    private $periodicComfortMessageAudioFileList = null;

    /**
     * @ElementName periodicComfortMessageAudioMediaTypeList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementMediaFileTypeList
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:23813
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementMediaFileTypeList|null
     */
    private $periodicComfortMessageAudioMediaTypeList = null;

    /**
     * @ElementName periodicComfortVideoMessageSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:23813
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    private $periodicComfortVideoMessageSelection = null;

    /**
     * @ElementName periodicComfortMessageVideoUrlList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:23813
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList|null
     */
    private $periodicComfortMessageVideoUrlList = null;

    /**
     * @ElementName periodicComfortMessageVideoFileList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementDescriptionList
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:23813
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementDescriptionList|null
     */
    private $periodicComfortMessageVideoFileList = null;

    /**
     * @ElementName periodicComfortMessageVideoMediaTypeList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementMediaFileTypeList
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:23813
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementMediaFileTypeList|null
     */
    private $periodicComfortMessageVideoMediaTypeList = null;

    /**
     * @ElementName enableMediaOnHoldForQueuedCalls
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:23813
     * @var bool|null
     */
    private $enableMediaOnHoldForQueuedCalls = null;

    /**
     * @ElementName mediaOnHoldSource
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceRead17
     * @Group ab0042aa512abc10edb3c55e4b416b0b:23813
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceRead17|null
     */
    private $mediaOnHoldSource = null;

    /**
     * @ElementName mediaOnHoldUseAlternateSourceForInternalCalls
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:23813
     * @var bool|null
     */
    private $mediaOnHoldUseAlternateSourceForInternalCalls = null;

    /**
     * @ElementName mediaOnHoldInternalSource
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceRead17
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:23813
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceRead17|null
     */
    private $mediaOnHoldInternalSource = null;

    /**
     * @ElementName playWhisperMessage
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:23813
     * @var bool|null
     */
    private $playWhisperMessage = null;

    /**
     * @ElementName whisperAudioMessageSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:23813
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    private $whisperAudioMessageSelection = null;

    /**
     * @ElementName whisperMessageAudioUrlList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:23813
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList|null
     */
    private $whisperMessageAudioUrlList = null;

    /**
     * @ElementName whisperMessageAudioFileList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementDescriptionList
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:23813
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementDescriptionList|null
     */
    private $whisperMessageAudioFileList = null;

    /**
     * @ElementName whisperMessageAudioMediaTypeList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementMediaFileTypeList
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:23813
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementMediaFileTypeList|null
     */
    private $whisperMessageAudioMediaTypeList = null;

    /**
     * @ElementName whisperVideoMessageSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:23813
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    private $whisperVideoMessageSelection = null;

    /**
     * @ElementName whisperMessageVideoUrlList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:23813
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList|null
     */
    private $whisperMessageVideoUrlList = null;

    /**
     * @ElementName whisperMessageVideoFileList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementDescriptionList
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:23813
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementDescriptionList|null
     */
    private $whisperMessageVideoFileList = null;

    /**
     * @ElementName whisperMessageVideoMediaTypeList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementMediaFileTypeList
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:23813
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementMediaFileTypeList|null
     */
    private $whisperMessageVideoMediaTypeList = null;

    /**
     * @ElementName estimatedWaitMessageOptionsRead
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EstimatedWaitMessageOptionsRead
     * @Group ab0042aa512abc10edb3c55e4b416b0b:23813
     * @var \CWM\BroadWorksConnector\Ocip\Models\EstimatedWaitMessageOptionsRead|null
     */
    private $estimatedWaitMessageOptionsRead = null;

    /**
     * Getter for playEntranceMessage
     *
     * @return bool
     */
    public function getPlayEntranceMessage()
    {
        return $this->playEntranceMessage instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->playEntranceMessage;
    }

    /**
     * Setter for playEntranceMessage
     *
     * @param bool $playEntranceMessage
     * @return $this
     */
    public function setPlayEntranceMessage($playEntranceMessage)
    {
        $this->playEntranceMessage = $playEntranceMessage;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPlayEntranceMessage()
    {
        $this->playEntranceMessage = null;
        return $this;
    }

    /**
     * Getter for mandatoryEntranceMessage
     *
     * @return bool
     */
    public function getMandatoryEntranceMessage()
    {
        return $this->mandatoryEntranceMessage instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mandatoryEntranceMessage;
    }

    /**
     * Setter for mandatoryEntranceMessage
     *
     * @param bool $mandatoryEntranceMessage
     * @return $this
     */
    public function setMandatoryEntranceMessage($mandatoryEntranceMessage)
    {
        $this->mandatoryEntranceMessage = $mandatoryEntranceMessage;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMandatoryEntranceMessage()
    {
        $this->mandatoryEntranceMessage = null;
        return $this;
    }

    /**
     * Getter for entranceAudioMessageSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     */
    public function getEntranceAudioMessageSelection()
    {
        return $this->entranceAudioMessageSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->entranceAudioMessageSelection;
    }

    /**
     * Setter for entranceAudioMessageSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $entranceAudioMessageSelection
     * @return $this
     */
    public function setEntranceAudioMessageSelection(\CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $entranceAudioMessageSelection)
    {
        $this->entranceAudioMessageSelection = $entranceAudioMessageSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEntranceAudioMessageSelection()
    {
        $this->entranceAudioMessageSelection = null;
        return $this;
    }

    /**
     * Getter for entranceMessageAudioUrlList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList
     */
    public function getEntranceMessageAudioUrlList()
    {
        return $this->entranceMessageAudioUrlList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->entranceMessageAudioUrlList;
    }

    /**
     * Setter for entranceMessageAudioUrlList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList $entranceMessageAudioUrlList
     * @return $this
     */
    public function setEntranceMessageAudioUrlList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList $entranceMessageAudioUrlList)
    {
        $this->entranceMessageAudioUrlList = $entranceMessageAudioUrlList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEntranceMessageAudioUrlList()
    {
        $this->entranceMessageAudioUrlList = null;
        return $this;
    }

    /**
     * Getter for entranceMessageAudioFileList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementDescriptionList
     */
    public function getEntranceMessageAudioFileList()
    {
        return $this->entranceMessageAudioFileList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->entranceMessageAudioFileList;
    }

    /**
     * Setter for entranceMessageAudioFileList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementDescriptionList $entranceMessageAudioFileList
     * @return $this
     */
    public function setEntranceMessageAudioFileList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementDescriptionList $entranceMessageAudioFileList)
    {
        $this->entranceMessageAudioFileList = $entranceMessageAudioFileList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEntranceMessageAudioFileList()
    {
        $this->entranceMessageAudioFileList = null;
        return $this;
    }

    /**
     * Getter for entranceMessageAudioMediaTypeList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementMediaFileTypeList
     */
    public function getEntranceMessageAudioMediaTypeList()
    {
        return $this->entranceMessageAudioMediaTypeList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->entranceMessageAudioMediaTypeList;
    }

    /**
     * Setter for entranceMessageAudioMediaTypeList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementMediaFileTypeList $entranceMessageAudioMediaTypeList
     * @return $this
     */
    public function setEntranceMessageAudioMediaTypeList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementMediaFileTypeList $entranceMessageAudioMediaTypeList)
    {
        $this->entranceMessageAudioMediaTypeList = $entranceMessageAudioMediaTypeList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEntranceMessageAudioMediaTypeList()
    {
        $this->entranceMessageAudioMediaTypeList = null;
        return $this;
    }

    /**
     * Getter for entranceVideoMessageSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     */
    public function getEntranceVideoMessageSelection()
    {
        return $this->entranceVideoMessageSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->entranceVideoMessageSelection;
    }

    /**
     * Setter for entranceVideoMessageSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $entranceVideoMessageSelection
     * @return $this
     */
    public function setEntranceVideoMessageSelection(\CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $entranceVideoMessageSelection)
    {
        $this->entranceVideoMessageSelection = $entranceVideoMessageSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEntranceVideoMessageSelection()
    {
        $this->entranceVideoMessageSelection = null;
        return $this;
    }

    /**
     * Getter for entranceMessageVideoUrlList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList
     */
    public function getEntranceMessageVideoUrlList()
    {
        return $this->entranceMessageVideoUrlList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->entranceMessageVideoUrlList;
    }

    /**
     * Setter for entranceMessageVideoUrlList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList $entranceMessageVideoUrlList
     * @return $this
     */
    public function setEntranceMessageVideoUrlList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList $entranceMessageVideoUrlList)
    {
        $this->entranceMessageVideoUrlList = $entranceMessageVideoUrlList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEntranceMessageVideoUrlList()
    {
        $this->entranceMessageVideoUrlList = null;
        return $this;
    }

    /**
     * Getter for entranceMessageVideoFileList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementDescriptionList
     */
    public function getEntranceMessageVideoFileList()
    {
        return $this->entranceMessageVideoFileList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->entranceMessageVideoFileList;
    }

    /**
     * Setter for entranceMessageVideoFileList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementDescriptionList $entranceMessageVideoFileList
     * @return $this
     */
    public function setEntranceMessageVideoFileList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementDescriptionList $entranceMessageVideoFileList)
    {
        $this->entranceMessageVideoFileList = $entranceMessageVideoFileList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEntranceMessageVideoFileList()
    {
        $this->entranceMessageVideoFileList = null;
        return $this;
    }

    /**
     * Getter for entranceMessageVideoMediaTypeList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementMediaFileTypeList
     */
    public function getEntranceMessageVideoMediaTypeList()
    {
        return $this->entranceMessageVideoMediaTypeList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->entranceMessageVideoMediaTypeList;
    }

    /**
     * Setter for entranceMessageVideoMediaTypeList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementMediaFileTypeList $entranceMessageVideoMediaTypeList
     * @return $this
     */
    public function setEntranceMessageVideoMediaTypeList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementMediaFileTypeList $entranceMessageVideoMediaTypeList)
    {
        $this->entranceMessageVideoMediaTypeList = $entranceMessageVideoMediaTypeList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEntranceMessageVideoMediaTypeList()
    {
        $this->entranceMessageVideoMediaTypeList = null;
        return $this;
    }

    /**
     * Getter for playPeriodicComfortMessage
     *
     * @return bool
     */
    public function getPlayPeriodicComfortMessage()
    {
        return $this->playPeriodicComfortMessage instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->playPeriodicComfortMessage;
    }

    /**
     * Setter for playPeriodicComfortMessage
     *
     * @param bool $playPeriodicComfortMessage
     * @return $this
     */
    public function setPlayPeriodicComfortMessage($playPeriodicComfortMessage)
    {
        $this->playPeriodicComfortMessage = $playPeriodicComfortMessage;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPlayPeriodicComfortMessage()
    {
        $this->playPeriodicComfortMessage = null;
        return $this;
    }

    /**
     * Getter for timeBetweenComfortMessagesSeconds
     *
     * @return int
     */
    public function getTimeBetweenComfortMessagesSeconds()
    {
        return $this->timeBetweenComfortMessagesSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->timeBetweenComfortMessagesSeconds;
    }

    /**
     * Setter for timeBetweenComfortMessagesSeconds
     *
     * @param int $timeBetweenComfortMessagesSeconds
     * @return $this
     */
    public function setTimeBetweenComfortMessagesSeconds($timeBetweenComfortMessagesSeconds)
    {
        $this->timeBetweenComfortMessagesSeconds = $timeBetweenComfortMessagesSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTimeBetweenComfortMessagesSeconds()
    {
        $this->timeBetweenComfortMessagesSeconds = null;
        return $this;
    }

    /**
     * Getter for periodicComfortAudioMessageSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     */
    public function getPeriodicComfortAudioMessageSelection()
    {
        return $this->periodicComfortAudioMessageSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->periodicComfortAudioMessageSelection;
    }

    /**
     * Setter for periodicComfortAudioMessageSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $periodicComfortAudioMessageSelection
     * @return $this
     */
    public function setPeriodicComfortAudioMessageSelection(\CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $periodicComfortAudioMessageSelection)
    {
        $this->periodicComfortAudioMessageSelection = $periodicComfortAudioMessageSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPeriodicComfortAudioMessageSelection()
    {
        $this->periodicComfortAudioMessageSelection = null;
        return $this;
    }

    /**
     * Getter for periodicComfortMessageAudioUrlList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList
     */
    public function getPeriodicComfortMessageAudioUrlList()
    {
        return $this->periodicComfortMessageAudioUrlList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->periodicComfortMessageAudioUrlList;
    }

    /**
     * Setter for periodicComfortMessageAudioUrlList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList $periodicComfortMessageAudioUrlList
     * @return $this
     */
    public function setPeriodicComfortMessageAudioUrlList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList $periodicComfortMessageAudioUrlList)
    {
        $this->periodicComfortMessageAudioUrlList = $periodicComfortMessageAudioUrlList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPeriodicComfortMessageAudioUrlList()
    {
        $this->periodicComfortMessageAudioUrlList = null;
        return $this;
    }

    /**
     * Getter for periodicComfortMessageAudioFileList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementDescriptionList
     */
    public function getPeriodicComfortMessageAudioFileList()
    {
        return $this->periodicComfortMessageAudioFileList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->periodicComfortMessageAudioFileList;
    }

    /**
     * Setter for periodicComfortMessageAudioFileList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementDescriptionList $periodicComfortMessageAudioFileList
     * @return $this
     */
    public function setPeriodicComfortMessageAudioFileList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementDescriptionList $periodicComfortMessageAudioFileList)
    {
        $this->periodicComfortMessageAudioFileList = $periodicComfortMessageAudioFileList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPeriodicComfortMessageAudioFileList()
    {
        $this->periodicComfortMessageAudioFileList = null;
        return $this;
    }

    /**
     * Getter for periodicComfortMessageAudioMediaTypeList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementMediaFileTypeList
     */
    public function getPeriodicComfortMessageAudioMediaTypeList()
    {
        return $this->periodicComfortMessageAudioMediaTypeList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->periodicComfortMessageAudioMediaTypeList;
    }

    /**
     * Setter for periodicComfortMessageAudioMediaTypeList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementMediaFileTypeList $periodicComfortMessageAudioMediaTypeList
     * @return $this
     */
    public function setPeriodicComfortMessageAudioMediaTypeList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementMediaFileTypeList $periodicComfortMessageAudioMediaTypeList)
    {
        $this->periodicComfortMessageAudioMediaTypeList = $periodicComfortMessageAudioMediaTypeList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPeriodicComfortMessageAudioMediaTypeList()
    {
        $this->periodicComfortMessageAudioMediaTypeList = null;
        return $this;
    }

    /**
     * Getter for periodicComfortVideoMessageSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     */
    public function getPeriodicComfortVideoMessageSelection()
    {
        return $this->periodicComfortVideoMessageSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->periodicComfortVideoMessageSelection;
    }

    /**
     * Setter for periodicComfortVideoMessageSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $periodicComfortVideoMessageSelection
     * @return $this
     */
    public function setPeriodicComfortVideoMessageSelection(\CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $periodicComfortVideoMessageSelection)
    {
        $this->periodicComfortVideoMessageSelection = $periodicComfortVideoMessageSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPeriodicComfortVideoMessageSelection()
    {
        $this->periodicComfortVideoMessageSelection = null;
        return $this;
    }

    /**
     * Getter for periodicComfortMessageVideoUrlList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList
     */
    public function getPeriodicComfortMessageVideoUrlList()
    {
        return $this->periodicComfortMessageVideoUrlList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->periodicComfortMessageVideoUrlList;
    }

    /**
     * Setter for periodicComfortMessageVideoUrlList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList $periodicComfortMessageVideoUrlList
     * @return $this
     */
    public function setPeriodicComfortMessageVideoUrlList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList $periodicComfortMessageVideoUrlList)
    {
        $this->periodicComfortMessageVideoUrlList = $periodicComfortMessageVideoUrlList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPeriodicComfortMessageVideoUrlList()
    {
        $this->periodicComfortMessageVideoUrlList = null;
        return $this;
    }

    /**
     * Getter for periodicComfortMessageVideoFileList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementDescriptionList
     */
    public function getPeriodicComfortMessageVideoFileList()
    {
        return $this->periodicComfortMessageVideoFileList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->periodicComfortMessageVideoFileList;
    }

    /**
     * Setter for periodicComfortMessageVideoFileList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementDescriptionList $periodicComfortMessageVideoFileList
     * @return $this
     */
    public function setPeriodicComfortMessageVideoFileList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementDescriptionList $periodicComfortMessageVideoFileList)
    {
        $this->periodicComfortMessageVideoFileList = $periodicComfortMessageVideoFileList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPeriodicComfortMessageVideoFileList()
    {
        $this->periodicComfortMessageVideoFileList = null;
        return $this;
    }

    /**
     * Getter for periodicComfortMessageVideoMediaTypeList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementMediaFileTypeList
     */
    public function getPeriodicComfortMessageVideoMediaTypeList()
    {
        return $this->periodicComfortMessageVideoMediaTypeList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->periodicComfortMessageVideoMediaTypeList;
    }

    /**
     * Setter for periodicComfortMessageVideoMediaTypeList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementMediaFileTypeList $periodicComfortMessageVideoMediaTypeList
     * @return $this
     */
    public function setPeriodicComfortMessageVideoMediaTypeList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementMediaFileTypeList $periodicComfortMessageVideoMediaTypeList)
    {
        $this->periodicComfortMessageVideoMediaTypeList = $periodicComfortMessageVideoMediaTypeList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPeriodicComfortMessageVideoMediaTypeList()
    {
        $this->periodicComfortMessageVideoMediaTypeList = null;
        return $this;
    }

    /**
     * Getter for enableMediaOnHoldForQueuedCalls
     *
     * @return bool
     */
    public function getEnableMediaOnHoldForQueuedCalls()
    {
        return $this->enableMediaOnHoldForQueuedCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableMediaOnHoldForQueuedCalls;
    }

    /**
     * Setter for enableMediaOnHoldForQueuedCalls
     *
     * @param bool $enableMediaOnHoldForQueuedCalls
     * @return $this
     */
    public function setEnableMediaOnHoldForQueuedCalls($enableMediaOnHoldForQueuedCalls)
    {
        $this->enableMediaOnHoldForQueuedCalls = $enableMediaOnHoldForQueuedCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableMediaOnHoldForQueuedCalls()
    {
        $this->enableMediaOnHoldForQueuedCalls = null;
        return $this;
    }

    /**
     * Getter for mediaOnHoldSource
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceRead17
     */
    public function getMediaOnHoldSource()
    {
        return $this->mediaOnHoldSource instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mediaOnHoldSource;
    }

    /**
     * Setter for mediaOnHoldSource
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceRead17 $mediaOnHoldSource
     * @return $this
     */
    public function setMediaOnHoldSource(\CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceRead17 $mediaOnHoldSource)
    {
        $this->mediaOnHoldSource = $mediaOnHoldSource;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMediaOnHoldSource()
    {
        $this->mediaOnHoldSource = null;
        return $this;
    }

    /**
     * Getter for mediaOnHoldUseAlternateSourceForInternalCalls
     *
     * @return bool
     */
    public function getMediaOnHoldUseAlternateSourceForInternalCalls()
    {
        return $this->mediaOnHoldUseAlternateSourceForInternalCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mediaOnHoldUseAlternateSourceForInternalCalls;
    }

    /**
     * Setter for mediaOnHoldUseAlternateSourceForInternalCalls
     *
     * @param bool $mediaOnHoldUseAlternateSourceForInternalCalls
     * @return $this
     */
    public function setMediaOnHoldUseAlternateSourceForInternalCalls($mediaOnHoldUseAlternateSourceForInternalCalls)
    {
        $this->mediaOnHoldUseAlternateSourceForInternalCalls = $mediaOnHoldUseAlternateSourceForInternalCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMediaOnHoldUseAlternateSourceForInternalCalls()
    {
        $this->mediaOnHoldUseAlternateSourceForInternalCalls = null;
        return $this;
    }

    /**
     * Getter for mediaOnHoldInternalSource
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceRead17
     */
    public function getMediaOnHoldInternalSource()
    {
        return $this->mediaOnHoldInternalSource instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mediaOnHoldInternalSource;
    }

    /**
     * Setter for mediaOnHoldInternalSource
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceRead17 $mediaOnHoldInternalSource
     * @return $this
     */
    public function setMediaOnHoldInternalSource(\CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceRead17 $mediaOnHoldInternalSource)
    {
        $this->mediaOnHoldInternalSource = $mediaOnHoldInternalSource;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMediaOnHoldInternalSource()
    {
        $this->mediaOnHoldInternalSource = null;
        return $this;
    }

    /**
     * Getter for playWhisperMessage
     *
     * @return bool
     */
    public function getPlayWhisperMessage()
    {
        return $this->playWhisperMessage instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->playWhisperMessage;
    }

    /**
     * Setter for playWhisperMessage
     *
     * @param bool $playWhisperMessage
     * @return $this
     */
    public function setPlayWhisperMessage($playWhisperMessage)
    {
        $this->playWhisperMessage = $playWhisperMessage;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPlayWhisperMessage()
    {
        $this->playWhisperMessage = null;
        return $this;
    }

    /**
     * Getter for whisperAudioMessageSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     */
    public function getWhisperAudioMessageSelection()
    {
        return $this->whisperAudioMessageSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->whisperAudioMessageSelection;
    }

    /**
     * Setter for whisperAudioMessageSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $whisperAudioMessageSelection
     * @return $this
     */
    public function setWhisperAudioMessageSelection(\CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $whisperAudioMessageSelection)
    {
        $this->whisperAudioMessageSelection = $whisperAudioMessageSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetWhisperAudioMessageSelection()
    {
        $this->whisperAudioMessageSelection = null;
        return $this;
    }

    /**
     * Getter for whisperMessageAudioUrlList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList
     */
    public function getWhisperMessageAudioUrlList()
    {
        return $this->whisperMessageAudioUrlList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->whisperMessageAudioUrlList;
    }

    /**
     * Setter for whisperMessageAudioUrlList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList $whisperMessageAudioUrlList
     * @return $this
     */
    public function setWhisperMessageAudioUrlList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList $whisperMessageAudioUrlList)
    {
        $this->whisperMessageAudioUrlList = $whisperMessageAudioUrlList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetWhisperMessageAudioUrlList()
    {
        $this->whisperMessageAudioUrlList = null;
        return $this;
    }

    /**
     * Getter for whisperMessageAudioFileList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementDescriptionList
     */
    public function getWhisperMessageAudioFileList()
    {
        return $this->whisperMessageAudioFileList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->whisperMessageAudioFileList;
    }

    /**
     * Setter for whisperMessageAudioFileList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementDescriptionList $whisperMessageAudioFileList
     * @return $this
     */
    public function setWhisperMessageAudioFileList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementDescriptionList $whisperMessageAudioFileList)
    {
        $this->whisperMessageAudioFileList = $whisperMessageAudioFileList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetWhisperMessageAudioFileList()
    {
        $this->whisperMessageAudioFileList = null;
        return $this;
    }

    /**
     * Getter for whisperMessageAudioMediaTypeList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementMediaFileTypeList
     */
    public function getWhisperMessageAudioMediaTypeList()
    {
        return $this->whisperMessageAudioMediaTypeList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->whisperMessageAudioMediaTypeList;
    }

    /**
     * Setter for whisperMessageAudioMediaTypeList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementMediaFileTypeList $whisperMessageAudioMediaTypeList
     * @return $this
     */
    public function setWhisperMessageAudioMediaTypeList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementMediaFileTypeList $whisperMessageAudioMediaTypeList)
    {
        $this->whisperMessageAudioMediaTypeList = $whisperMessageAudioMediaTypeList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetWhisperMessageAudioMediaTypeList()
    {
        $this->whisperMessageAudioMediaTypeList = null;
        return $this;
    }

    /**
     * Getter for whisperVideoMessageSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     */
    public function getWhisperVideoMessageSelection()
    {
        return $this->whisperVideoMessageSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->whisperVideoMessageSelection;
    }

    /**
     * Setter for whisperVideoMessageSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $whisperVideoMessageSelection
     * @return $this
     */
    public function setWhisperVideoMessageSelection(\CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $whisperVideoMessageSelection)
    {
        $this->whisperVideoMessageSelection = $whisperVideoMessageSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetWhisperVideoMessageSelection()
    {
        $this->whisperVideoMessageSelection = null;
        return $this;
    }

    /**
     * Getter for whisperMessageVideoUrlList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList
     */
    public function getWhisperMessageVideoUrlList()
    {
        return $this->whisperMessageVideoUrlList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->whisperMessageVideoUrlList;
    }

    /**
     * Setter for whisperMessageVideoUrlList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList $whisperMessageVideoUrlList
     * @return $this
     */
    public function setWhisperMessageVideoUrlList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList $whisperMessageVideoUrlList)
    {
        $this->whisperMessageVideoUrlList = $whisperMessageVideoUrlList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetWhisperMessageVideoUrlList()
    {
        $this->whisperMessageVideoUrlList = null;
        return $this;
    }

    /**
     * Getter for whisperMessageVideoFileList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementDescriptionList
     */
    public function getWhisperMessageVideoFileList()
    {
        return $this->whisperMessageVideoFileList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->whisperMessageVideoFileList;
    }

    /**
     * Setter for whisperMessageVideoFileList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementDescriptionList $whisperMessageVideoFileList
     * @return $this
     */
    public function setWhisperMessageVideoFileList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementDescriptionList $whisperMessageVideoFileList)
    {
        $this->whisperMessageVideoFileList = $whisperMessageVideoFileList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetWhisperMessageVideoFileList()
    {
        $this->whisperMessageVideoFileList = null;
        return $this;
    }

    /**
     * Getter for whisperMessageVideoMediaTypeList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementMediaFileTypeList
     */
    public function getWhisperMessageVideoMediaTypeList()
    {
        return $this->whisperMessageVideoMediaTypeList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->whisperMessageVideoMediaTypeList;
    }

    /**
     * Setter for whisperMessageVideoMediaTypeList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementMediaFileTypeList $whisperMessageVideoMediaTypeList
     * @return $this
     */
    public function setWhisperMessageVideoMediaTypeList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementMediaFileTypeList $whisperMessageVideoMediaTypeList)
    {
        $this->whisperMessageVideoMediaTypeList = $whisperMessageVideoMediaTypeList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetWhisperMessageVideoMediaTypeList()
    {
        $this->whisperMessageVideoMediaTypeList = null;
        return $this;
    }

    /**
     * Getter for estimatedWaitMessageOptionsRead
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\EstimatedWaitMessageOptionsRead
     */
    public function getEstimatedWaitMessageOptionsRead()
    {
        return $this->estimatedWaitMessageOptionsRead instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->estimatedWaitMessageOptionsRead;
    }

    /**
     * Setter for estimatedWaitMessageOptionsRead
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EstimatedWaitMessageOptionsRead $estimatedWaitMessageOptionsRead
     * @return $this
     */
    public function setEstimatedWaitMessageOptionsRead(\CWM\BroadWorksConnector\Ocip\Models\EstimatedWaitMessageOptionsRead $estimatedWaitMessageOptionsRead)
    {
        $this->estimatedWaitMessageOptionsRead = $estimatedWaitMessageOptionsRead;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEstimatedWaitMessageOptionsRead()
    {
        $this->estimatedWaitMessageOptionsRead = null;
        return $this;
    }


}

