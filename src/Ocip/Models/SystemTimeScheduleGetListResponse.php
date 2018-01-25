<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemTimeScheduleGetListResponse
 *
 * Response to the SystemTimeScheduleGetListRequest.
 *         The response contains all the system time schedule names.
 */
class SystemTimeScheduleGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName timeSchedule
     * @var string[]
     */
    private $timeSchedule = array(
        
    );

    /**
     * Getter for timeSchedule
     *
     * @ElementName timeSchedule
     * @return string[]
     */
    public function getTimeSchedule()
    {
        return $this->timeSchedule;
    }

    /**
     * Setter for timeSchedule
     *
     * @ElementName timeSchedule
     * @param string[] $timeSchedule
     * @return $this
     */
    public function setTimeSchedule($timeSchedule)
    {
        $this->timeSchedule = $timeSchedule;
        return $this;
    }

    /**
     * Adder for timeSchedule
     *
     * @ElementName timeSchedule
     * @param string $timeSchedule
     * @return $this
     */
    public function addTimeSchedule($timeSchedule)
    {
        $this->timeSchedule []= $timeSchedule;
        return $this;
    }


}
