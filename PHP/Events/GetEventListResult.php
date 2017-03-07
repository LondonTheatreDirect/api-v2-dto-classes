<?php
namespace LTD_API;

class GetEventListResult
{
    //array of EventInfo
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

