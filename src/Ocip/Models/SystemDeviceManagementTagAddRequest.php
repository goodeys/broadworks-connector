<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceManagementTagAddRequest
 *
 * Request to add a static configuration tag.
 *           The response is either a SuccessResponse or an ErrorResponse.
 *           Replaced by: SystemDeviceManagementTagAddRequest21sp2
 */
class SystemDeviceManagementTagAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName systemDefaultTagSet
     * @var bool|null
     */
    private $systemDefaultTagSet = null;

    /**
     * @ElementName tagSetName
     * @var string|null
     */
    private $tagSetName = null;

    /**
     * @ElementName tagName
     * @var string|null
     */
    private $tagName = null;

    /**
     * @ElementName tagValue
     * @var string|null
     */
    private $tagValue = null;

    /**
     * Getter for systemDefaultTagSet
     *
     * @ElementName systemDefaultTagSet
     * @return bool|null
     */
    public function getSystemDefaultTagSet()
    {
        return $this->systemDefaultTagSet;
    }

    /**
     * Setter for systemDefaultTagSet
     *
     * @ElementName systemDefaultTagSet
     * @param bool|null $systemDefaultTagSet
     * @return $this
     */
    public function setSystemDefaultTagSet($systemDefaultTagSet)
    {
        $this->systemDefaultTagSet = $systemDefaultTagSet;
        return $this;
    }

    /**
     * Getter for tagSetName
     *
     * @ElementName tagSetName
     * @return string|null
     */
    public function getTagSetName()
    {
        return $this->tagSetName;
    }

    /**
     * Setter for tagSetName
     *
     * @ElementName tagSetName
     * @param string|null $tagSetName
     * @return $this
     */
    public function setTagSetName($tagSetName)
    {
        $this->tagSetName = $tagSetName;
        return $this;
    }

    /**
     * Getter for tagName
     *
     * @ElementName tagName
     * @return string|null
     */
    public function getTagName()
    {
        return $this->tagName;
    }

    /**
     * Setter for tagName
     *
     * @ElementName tagName
     * @param string|null $tagName
     * @return $this
     */
    public function setTagName($tagName)
    {
        $this->tagName = $tagName;
        return $this;
    }

    /**
     * Getter for tagValue
     *
     * @ElementName tagValue
     * @return string|null
     */
    public function getTagValue()
    {
        return $this->tagValue;
    }

    /**
     * Setter for tagValue
     *
     * @ElementName tagValue
     * @param string|null $tagValue
     * @return $this
     */
    public function setTagValue($tagValue)
    {
        $this->tagValue = $tagValue;
        return $this;
    }


}
