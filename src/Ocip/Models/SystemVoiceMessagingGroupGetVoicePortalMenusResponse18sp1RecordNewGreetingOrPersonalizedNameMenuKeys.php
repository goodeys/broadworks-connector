<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupGetVoicePortalMenusResponse18sp1RecordNewGreetingOrPersonalizedNameMenuKeys
 *
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:26624","type":"sequence"}]
 */
class SystemVoiceMessagingGroupGetVoicePortalMenusResponse18sp1RecordNewGreetingOrPersonalizedNameMenuKeys
{

    /**
     * @ElementName endRecording
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:26624
     * @var string|null
     */
    private $endRecording = null;

    /**
     * Getter for endRecording
     *
     * @return string
     */
    public function getEndRecording()
    {
        return $this->endRecording instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->endRecording;
    }

    /**
     * Setter for endRecording
     *
     * @param string $endRecording
     * @return $this
     */
    public function setEndRecording($endRecording)
    {
        $this->endRecording = $endRecording;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEndRecording()
    {
        $this->endRecording = null;
        return $this;
    }


}

