<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AnnouncementFileKey
 *
 * Uniquely identifies a file within a group or user repository.
 */
class AnnouncementFileKey
{

    /**
     * @ElementName name
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName mediaFileType
     * @var string|null
     */
    private $mediaFileType = null;

    /**
     * Getter for name
     *
     * @ElementName name
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Setter for name
     *
     * @ElementName name
     * @param string|null $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Getter for mediaFileType
     *
     * @ElementName mediaFileType
     * @return string|null
     */
    public function getMediaFileType()
    {
        return $this->mediaFileType;
    }

    /**
     * Setter for mediaFileType
     *
     * @ElementName mediaFileType
     * @param string|null $mediaFileType
     * @return $this
     */
    public function setMediaFileType($mediaFileType)
    {
        $this->mediaFileType = $mediaFileType;
        return $this;
    }


}
