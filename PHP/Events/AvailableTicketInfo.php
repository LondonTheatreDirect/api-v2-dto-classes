<?php
namespace LTD_API;

class AvailableTicketInfo
{
    private $venueId;
    private $venueName;
    private $venueAddress;
    private $venueCity;
    private $ticketName1;
    private $ticketName2;
    private $adjacencyIndex;
    private $faceValue;
    private $sellingPrice;
    private $directBookingUrl;
    private $ticketArea;
    private $ticketId;
    private $isRestrictedView;
    private $restrictionDescription;
    
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

    public function getTicketName1()
    {
        return $this->ticketName1;
    }
    public function setTicketName1($ticketName1)
    {
        $this->ticketName1 = $ticketName1;
    }

    public function getTicketName2()
    {
        return $this->ticketName2;
    }
    public function setTicketName2($ticketName2)
    {
        $this->ticketName2 = $ticketName2;
    }

    public function getAdjacencyIndex()
    {
        return $this->adjacencyIndex;
    }
    public function setAdjacencyIndex($adjacencyIndex)
    {
        $this->adjacencyIndex = $adjacencyIndex;
    }

    public function getFaceValue()
    {
        return $this->faceValue;
    }
    public function setFaceValue($faceValue)
    {
        $this->faceValue = $faceValue;
    }

    public function getSellingPrice()
    {
        return $this->sellingPrice;
    }
    public function setSellingPrice($sellingPrice)
    {
        $this->sellingPrice = $sellingPrice;
    }

    public function getDirectBookingUrl()
    {
        return $this->directBookingUrl;
    }
    public function setDirectBookingUrl($directBookingUrl)
    {
        $this->directBookingUrl = $directBookingUrl;
    }

    public function getTicketArea()
    {
        return $this->ticketArea;
    }
    public function setTicketArea($ticketArea)
    {
        $this->ticketArea = $ticketArea;
    }

    public function getTicketId()
    {
        return $this->ticketId;
    }
    public function setTicketId($ticketId)
    {
        $this->ticketId = $ticketId;
    }

    public function getIsRestrictedView()
    {
        return $this->isRestrictedView;
    }
    public function setIsRestrictedView($isRestrictedView)
    {
        $this->isRestrictedView = $isRestrictedView;
    }

    public function getRestrictionDescription()
    {
        return $this->restrictionDescription;
    }
    public function setRestrictionDescription($restrictionDescription)
    {
        $this->restrictionDescription = $restrictionDescription;
    }
}
