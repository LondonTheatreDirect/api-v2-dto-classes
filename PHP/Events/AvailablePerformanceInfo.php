<?php
namespace LTD_API;

class AvailablePerformanceInfo
{
    private $performanceId;
    //date format
    private $performanceDate;
    private $minimumTicketPrice;
    //array of AvailableTicketInfo
    private $availableTicketInfos;
    //array of AvailableTicketsBlockInfo
    private $availableTicketsBlockInfos;
    
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

    public function getMinimumTicketPrice()
    {
        return $this->minimumTicketPrice;
    }
    public function setMinimumTicketPrice($minimumTicketPrice)
    {
        $this->minimumTicketPrice = $minimumTicketPrice;
    }

    public function getAvailableTicketInfos()
    {
        return $this->availableTicketInfos;
    }
    public function setAvailableTicketInfos($availableTicketInfos)
    {
        $this->availableTicketInfos = $availableTicketInfos;
    }

    public function getAvailableTicketsBlockInfos()
    {
        return $this->availableTicketsBlockInfos;
    }
    public function setAvailableTicketsBlockInfos($availableTicketsBlockInfos)
    {
        $this->availableTicketsBlockInfos = $availableTicketsBlockInfos;
    }
}

