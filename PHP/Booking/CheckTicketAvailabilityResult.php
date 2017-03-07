<?php
namespace LTD_API;

class CheckTicketAvailabilityResult
{
    private $ticketId;
    private $isAvailable;
    
    public function getTicketId()
    {
        return $this->ticketId;
    }
    public function setTicketId($ticketId)
    {
        $this->ticketId = $ticketId;
    }

    public function getIsAvailable()
    {
        return $this->isAvailable;
    }
    public function setIsAvailable($isAvailable)
    {
        $this->isAvailable = $isAvailable;
    }
}

