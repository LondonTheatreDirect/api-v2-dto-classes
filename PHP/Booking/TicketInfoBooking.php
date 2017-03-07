<?php
namespace LTD_API;

class TicketInfoBooking
{
    private $ticketId;
    private $ticketName1;
    private $ticketName2;
    private $faceValue;
    private $sellingPrice;
    private $isRestrictedView;
    private $restrictionDescription;
    
    public function getTicketId()
    {
        return $this->ticketId;
    }
    public function setTicketId($ticketId)
    {
        $this->ticketId = $ticketId;
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

