<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMediaModifyRequest
 *
 * Request to modify a media.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemMediaModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName mediaName
     * @var string|null
     */
    private $mediaName = null;

    /**
     * @ElementName codecName
     * @var string|null
     */
    private $codecName = null;

    /**
     * @ElementName bandwidthEnforcementType
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaBandwidthEnforcementType|null
     */
    private $bandwidthEnforcementType = null;

    /**
     * @ElementName mediaBandwidth
     * @Nillable
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $mediaBandwidth = null;

    /**
     * Getter for mediaName
     *
     * @ElementName mediaName
     * @return string|null
     */
    public function getMediaName()
    {
        return $this->mediaName;
    }

    /**
     * Setter for mediaName
     *
     * @ElementName mediaName
     * @param string|null $mediaName
     * @return $this
     */
    public function setMediaName($mediaName)
    {
        $this->mediaName = $mediaName;
        return $this;
    }

    /**
     * Getter for codecName
     *
     * @ElementName codecName
     * @return string|null
     */
    public function getCodecName()
    {
        return $this->codecName;
    }

    /**
     * Setter for codecName
     *
     * @ElementName codecName
     * @param string|null $codecName
     * @return $this
     */
    public function setCodecName($codecName)
    {
        $this->codecName = $codecName;
        return $this;
    }

    /**
     * Getter for bandwidthEnforcementType
     *
     * @ElementName bandwidthEnforcementType
     * @return \CWM\BroadWorksConnector\Ocip\Models\MediaBandwidthEnforcementType|null
     */
    public function getBandwidthEnforcementType()
    {
        return $this->bandwidthEnforcementType;
    }

    /**
     * Setter for bandwidthEnforcementType
     *
     * @ElementName bandwidthEnforcementType
     * @param \CWM\BroadWorksConnector\Ocip\Models\MediaBandwidthEnforcementType|null $bandwidthEnforcementType
     * @return $this
     */
    public function setBandwidthEnforcementType(\CWM\BroadWorksConnector\Ocip\Models\MediaBandwidthEnforcementType $bandwidthEnforcementType)
    {
        $this->bandwidthEnforcementType = $bandwidthEnforcementType;
        return $this;
    }

    /**
     * Getter for mediaBandwidth
     *
     * @ElementName mediaBandwidth
     * @Nillable
     * @return int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getMediaBandwidth()
    {
        return $this->mediaBandwidth;
    }

    /**
     * Setter for mediaBandwidth
     *
     * @ElementName mediaBandwidth
     * @Nillable
     * @param int|null|\CWM\BroadWorksConnector\Ocip\Nil $mediaBandwidth
     * @return $this
     */
    public function setMediaBandwidth($mediaBandwidth)
    {
        $this->mediaBandwidth = $mediaBandwidth;
        return $this;
    }


}

