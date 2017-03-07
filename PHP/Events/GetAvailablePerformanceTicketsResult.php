<?php
namespace LTD_API;

class GetAvailablePerformanceTicketsResult
{
    private $performanceId;
    private $eventId;
    //array of TicketAreaInfo
    private $ticketAreas;
    
    public function getPerformanceId()
    {
        return $this->performanceId;
    }
    public function setPerformanceId($performanceId)
    {
        $this->performanceId = $performanceId;
    }

    public function getEventId()
    {
        return $this->eventId;
    }
    public function setEventId($eventId)
    {
        $this->eventId = $eventId;
    }

    public function getTicketAreas()
    {
        return $this->ticketAreas;
    }
    public function setTicketAreas($ticketAreas)
    {
        $this->ticketAreas = $ticketAreas;
    }
}

