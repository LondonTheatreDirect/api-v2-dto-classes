<?php
namespace LTD_API;

class PerformanceInfo
{
    private $performanceId;
    //date format
    private $performanceDate;
    private $ticketCount;
    private $totalAvailableTickesCount;
    private $containsDiscountOfferTickets;
    private $containsNoFeeOfferTickets;
    private $minimumTicketPrice;
    private $maximumConsecutiveSeatsCount;
    private $eventId;
    
    public function getPerformanceId()
    {
        return $this->performanceId;
    }
    public function setPerformanceId($performanceId)
    {
        $this->performanceId = $performanceId;
    }

    public function getPerformanceDate()
    {
        return $this->performanceDate;
    }
    public function setPerformanceDate($performanceDate)
    {
        $this->performanceDate = $performanceDate;
    }

    public function getTicketCount()
    {
        return $this->ticketCount;
    }
    public function setTicketCount($ticketCount)
    {
        $this->ticketCount = $ticketCount;
    }

    public function getTotalAvailableTickesCount()
    {
        return $this->totalAvailableTickesCount;
    }
    public function setTotalAvailableTickesCount($totalAvailableTickesCount)
    {
        $this->totalAvailableTickesCount = $totalAvailableTickesCount;
    }

    public function getContainsDiscountOfferTickets()
    {
        return $this->containsDiscountOfferTickets;
    }
    public function setContainsDiscountOfferTickets($containsDiscountOfferTickets)
    {
        $this->containsDiscountOfferTickets = $containsDiscountOfferTickets;
    }

    public function getContainsNoFeeOfferTickets()
    {
        return $this->containsNoFeeOfferTickets;
    }
    public function setContainsNoFeeOfferTickets($containsNoFeeOfferTickets)
    {
        $this->containsNoFeeOfferTickets = $containsNoFeeOfferTickets;
    }

    public function getMinimumTicketPrice()
    {
        return $this->minimumTicketPrice;
    }
    public function setMinimumTicketPrice($minimumTicketPrice)
    {
        $this->minimumTicketPrice = $minimumTicketPrice;
    }

    public function getMaximumConsecutiveSeatsCount()
    {
        return $this->maximumConsecutiveSeatsCount;
    }
    public function setMaximumConsecutiveSeatsCount($maximumConsecutiveSeatsCount)
    {
        $this->maximumConsecutiveSeatsCount = $maximumConsecutiveSeatsCount;
    }

    public function getEventId()
    {
        return $this->eventId;
    }
    public function setEventId($eventId)
    {
        $this->eventId = $eventId;
    }
}

