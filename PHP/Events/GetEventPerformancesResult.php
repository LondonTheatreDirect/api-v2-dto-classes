<?php
namespace LTD_API;

class GetEventPerformancesResult
{
    private $eventId;
    //array of PerformanceInfo
    private $performances;
    
    public function getEventId()
    {
        return $this->eventId;
    }
    public function setEventId($eventId)
    {
        $this->eventId = $eventId;
    }

    public function getPerformances()
    {
        return $this->performances;
    }
    public function setPerformances($performances)
    {
        $this->performances = $performances;
    }
}

