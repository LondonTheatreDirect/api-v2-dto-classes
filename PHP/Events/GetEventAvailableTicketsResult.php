<?php
namespace LTD_API;

class GetEventAvailableTicketsResult
{
    //instance of AvailableEventInfo
    private $availableEvent;
    
    public function getAvailableEvent()
    {
        return $this->availableEvent;
    }
    public function setAvailableEvent($availableEvent)
    {
        $this->availableEvent = $availableEvent;
    }
}

