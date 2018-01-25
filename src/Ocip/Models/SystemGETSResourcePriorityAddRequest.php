<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemGETSResourcePriorityAddRequest
 *
 * Add a GETS Resource Priority.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemGETSResourcePriorityAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName priorityValue
     * @var string|null
     */
    private $priorityValue = null;

    /**
     * @ElementName priorityLevel
     * @var int|null
     */
    private $priorityLevel = null;

    /**
     * @ElementName priorityClass
     * @var string|null
     */
    private $priorityClass = null;

    /**
     * Getter for priorityValue
     *
     * @ElementName priorityValue
     * @return string|null
     */
    public function getPriorityValue()
    {
        return $this->priorityValue;
    }

    /**
     * Setter for priorityValue
     *
     * @ElementName priorityValue
     * @param string|null $priorityValue
     * @return $this
     */
    public function setPriorityValue($priorityValue)
    {
        $this->priorityValue = $priorityValue;
        return $this;
    }

    /**
     * Getter for priorityLevel
     *
     * @ElementName priorityLevel
     * @return int|null
     */
    public function getPriorityLevel()
    {
        return $this->priorityLevel;
    }

    /**
     * Setter for priorityLevel
     *
     * @ElementName priorityLevel
     * @param int|null $priorityLevel
     * @return $this
     */
    public function setPriorityLevel($priorityLevel)
    {
        $this->priorityLevel = $priorityLevel;
        return $this;
    }

    /**
     * Getter for priorityClass
     *
     * @ElementName priorityClass
     * @return string|null
     */
    public function getPriorityClass()
    {
        return $this->priorityClass;
    }

    /**
     * Setter for priorityClass
     *
     * @ElementName priorityClass
     * @param string|null $priorityClass
     * @return $this
     */
    public function setPriorityClass($priorityClass)
    {
        $this->priorityClass = $priorityClass;
        return $this;
    }


}
