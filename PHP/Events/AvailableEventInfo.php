<?php
namespace LTD_API;

class AvailableEventInfo
{
    private $eventName;
    private $eventId;
    //array of AvailablePerformanceInfo
    private $availablePerformanceInfos;
    
    public function getEventName()
    {
        return $this->eventName;
    }
    public function setEventName($eventName)
    {
        $this->eventName = $eventName;
    }

    public function getEventId()
    {
        return $this->eventId;
    }
    public function setEventId($eventId)
    {
        $this->eventId = $eventId;
    }

    public function getAvailablePerformanceInfos()
    {
        return $this->availablePerformanceInfos;
    }
    public function setAvailablePerformanceInfos($availablePerformanceInfos)
    {
        $this->availablePerformanceInfos = $availablePerformanceInfos;
    }
}
