<?php
namespace LTD_API;

class BasketItem
{
    private $basketItemId;
    private $eventId;
    private $eventName;
    private $imageUrl;
    //date format
    private $performanceDate;
    private $areaName;
    //array of String
    private $seats;
    //array of TicketInfoBooking
    private $tickets;
    private $venueId;
    private $venueName;
    private $venueAddress;
    private $venueCity;
    private $venuePostCode;
    private $priceSubTotal;
    private $reservationValidity;
    //date format
    private $expirationDate;
    
    public function getBasketItemId()
    {
        return $this->basketItemId;
    }
    public function setBasketItemId($basketItemId)
    {
        $this->basketItemId = $basketItemId;
    }

    public function getEventId()
    {
        return $this->eventId;
    }
    public function setEventId($eventId)
    {
        $this->eventId = $eventId;
    }

    public function getEventName()
    {
        return $this->eventName;
    }
    public function setEventName($eventName)
    {
        $this->eventName = $eventName;
    }

    public function getImageUrl()
    {
        return $this->imageUrl;
    }
    public function setImageUrl($imageUrl)
    {
        $this->imageUrl = $imageUrl;
    }

    public function getPerformanceDate()
    {
        return $this->performanceDate;
    }
    public function setPerformanceDate($performanceDate)
    {
        $this->performanceDate = $performanceDate;
    }

    public function getAreaName()
    {
        return $this->areaName;
    }
    public function setAreaName($areaName)
    {
        $this->areaName = $areaName;
    }

    public function getSeats()
    {
        return $this->seats;
    }
    public function setSeats($seats)
    {
        $this->seats = $seats;
    }

    public function getTickets()
    {
        return $this->tickets;
    }
    public function setTickets($tickets)
    {
        $this->tickets = $tickets;
    }

    public function getVenueId()
    {
        return $this->venueId;
    }
    public function setVenueId($venueId)
    {
        $this->venueId = $venueId;
    }

    public function getVenueName()
    {
        return $this->venueName;
    }
    public function setVenueName($venueName)
    {
        $this->venueName = $venueName;
    }

    public function getVenueAddress()
    {
        return $this->venueAddress;
    }
    public function setVenueAddress($venueAddress)
    {
        $this->venueAddress = $venueAddress;
    }

    public function getVenueCity()
    {
        return $this->venueCity;
    }
    public function setVenueCity($venueCity)
    {
        $this->venueCity = $venueCity;
    }

    public function getVenuePostCode()
    {
        return $this->venuePostCode;
    }
    public function setVenuePostCode($venuePostCode)
    {
        $this->venuePostCode = $venuePostCode;
    }

    public function getPriceSubTotal()
    {
        return $this->priceSubTotal;
    }
    public function setPriceSubTotal($priceSubTotal)
    {
        $this->priceSubTotal = $priceSubTotal;
    }

    public function getReservationValidity()
    {
        return $this->reservationValidity;
    }
    public function setReservationValidity($reservationValidity)
    {
        $this->reservationValidity = $reservationValidity;
    }

    public function getExpirationDate()
    {
        return $this->expirationDate;
    }
    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;
    }
}

