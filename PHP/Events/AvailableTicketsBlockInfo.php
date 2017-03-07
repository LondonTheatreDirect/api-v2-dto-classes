<?php
namespace LTD_API;

class AvailableTicketsBlockInfo
{
    private $areaName;
    private $facePrice;
    private $sellingPrice;
    //array of AvailableTicketInfo
    private $availableTicketsInfos;
    
    public function getAreaName()
    {
        return $this->areaName;
    }
    public function setAreaName($areaName)
    {
        $this->areaName = $areaName;
    }

    public function getFacePrice()
    {
        return $this->facePrice;
    }
    public function setFacePrice($facePrice)
    {
        $this->facePrice = $facePrice;
    }

    public function getSellingPrice()
    {
        return $this->sellingPrice;
    }
    public function setSellingPrice($sellingPrice)
    {
        $this->sellingPrice = $sellingPrice;
    }

    public function getAvailableTicketsInfos()
    {
        return $this->availableTicketsInfos;
    }
    public function setAvailableTicketsInfos($availableTicketsInfos)
    {
        $this->availableTicketsInfos = $availableTicketsInfos;
    }
}

