<?php
namespace LTD_API;

class GetFullPerformanceAvailabilityResult
{
    private $performanceId;
    private $eventId;
    //array of FullTicketInfo
    private $availableTickets;
	
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

    public function getAvailableTickets()
    {
        return $this->availableTickets;
    }
    public function setAvailableTickets($availableTickets)
    {
        $this->availableTickets = $availableTickets;
    }
}
