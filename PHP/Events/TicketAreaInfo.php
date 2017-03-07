<?php
namespace LTD_API;

class TicketAreaInfo
{
    private $areaName;
    private $sellingPrice;
    private $faceValue;
    private $ticketName1;
    //array of TicketInfo
    private $tickets;
    private $singleItemBookLink;
    
    public function getAreaName()
    {
        return $this->areaName;
    }
    public function setAreaName($areaName)
    {
        $this->areaName = $areaName;
    }

    public function getSellingPrice()
    {
        return $this->sellingPrice;
    }
    public function setSellingPrice($sellingPrice)
    {
        $this->sellingPrice = $sellingPrice;
    }

    public function getFaceValue()
    {
        return $this->faceValue;
    }
    public function setFaceValue($faceValue)
    {
        $this->faceValue = $faceValue;
    }

    public function getTicketName1()
    {
        return $this->ticketName1;
    }
    public function setTicketName1($ticketName1)
    {
        $this->ticketName1 = $ticketName1;
    }

    public function getTickets()
    {
        return $this->tickets;
    }
    public function setTickets($tickets)
    {
        $this->tickets = $tickets;
    }

    public function getSingleItemBookLink()
    {
        return $this->singleItemBookLink;
    }
    public function setSingleItemBookLink($singleItemBookLink)
    {
        $this->singleItemBookLink = $singleItemBookLink;
    }
}

