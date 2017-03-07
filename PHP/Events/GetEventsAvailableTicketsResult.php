<?php
namespace LTD_API;

class GetEventsAvailableTicketsResult
{
    //array of AvailableEventInfo
    private $availableEvents;
    
    public function getAvailableEvents()
    {
        return $this->availableEvents;
    }
    public function setAvailableEvents($availableEvents)
    {
        $this->availableEvents = $availableEvents;
    }
}

