<?php
namespace LTD_API;

class GetEventsPerformancesResult
{
    //array of EventPerformances
    private $events;
    
    public function getEvents()
    {
        return $this->events;
    }
    public function setEvents($events)
    {
        $this->events = $events;
    }
}

