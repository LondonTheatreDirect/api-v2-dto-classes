<?php
namespace LTD_API;

class FullTicketInfo
{
    private $ticketId;
    private $areaName;
    private $ticketName1;
    private $ticketName2;
    private $sellingPrice;
    private $faceValue;
    private $restrictedView;
    private $description;

    public function getTicketId()
    {
        return $this->ticketId;
    }
    public function setTicketId($ticketId)
    {
        $this->ticketId = $ticketId;
    }

    public function getAreaName()
    {
        return $this->areaName;
    }
    public function setAreaName($areaName)
    {
        $this->areaName = $areaName;
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

    public function getRestrictedView()
    {
        return $this->restrictedView;
    }
    public function setRestrictedView($restrictedView)
    {
        $this->restrictedView = $restrictedView;
    }

    public function getDescription()
    {
        return $this->description;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
}
