<?php
namespace LTD_API;

class EventType
{
    private $eventTypeId;
    private $eventTypeName;
    
    public function getEventTypeId()
    {
        return $this->eventTypeId;
    }
    public function setEventTypeId($eventTypeId)
    {
        $this->eventTypeId = $eventTypeId;
    }

    public function getEventTypeName()
    {
        return $this->eventTypeName;
    }
    public function setEventTypeName($eventTypeName)
    {
        $this->eventTypeName = $eventTypeName;
    }
}

