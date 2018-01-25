<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupEnterpriseTrunkPriorityWeightedTrunkGroup
 *
 * Trunk group details (order and weight) for each trunk group
 */
class GroupEnterpriseTrunkPriorityWeightedTrunkGroup
{

    /**
     * @ElementName trunkGroup
     * @var string|null
     */
    private $trunkGroup = null;

    /**
     * @ElementName priority
     * @var int|null
     */
    private $priority = null;

    /**
     * @ElementName weight
     * @var int|null
     */
    private $weight = null;

    /**
     * Getter for trunkGroup
     *
     * @ElementName trunkGroup
     * @return string|null
     */
    public function getTrunkGroup()
    {
        return $this->trunkGroup;
    }

    /**
     * Setter for trunkGroup
     *
     * @ElementName trunkGroup
     * @param string|null $trunkGroup
     * @return $this
     */
    public function setTrunkGroup($trunkGroup)
    {
        $this->trunkGroup = $trunkGroup;
        return $this;
    }

    /**
     * Getter for priority
     *
     * @ElementName priority
     * @return int|null
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Setter for priority
     *
     * @ElementName priority
     * @param int|null $priority
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * Getter for weight
     *
     * @ElementName weight
     * @return int|null
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Setter for weight
     *
     * @ElementName weight
     * @param int|null $weight
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }


}
