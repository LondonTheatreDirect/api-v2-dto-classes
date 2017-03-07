<?php
namespace LTD_API;

class GetEventDetailResult
{
    //instance of EventInfo
    private $event;

    public function getEvent()
    {
        return $this->event;
    }
    public function setEvent($event)
    {
        $this->event = $event;
    }
}

