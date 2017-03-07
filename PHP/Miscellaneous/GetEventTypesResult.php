<?php
namespace LTD_API;

public class GetEventTypesResult
{
    //array of EventType
    private $eventTypes;
    
    public function getEventTypes()
    {
        return $this->eventTypes;
    }
    public function setEventTypes($eventTypes)
    {
        $this->eventTypes = $eventTypes;
    }
}

