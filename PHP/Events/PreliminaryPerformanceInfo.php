<?php
namespace LTD_API;

class PreliminaryPerformanceInfo
{
    private $performanceId;
    //date format
    private $performanceDate;
    private $minimalTicketPrice;
    private $maximalTicketPrice;
    
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

    public function getMinimalTicketPrice()
    {
        return $this->minimalTicketPrice;
    }
    public function setMinimalTicketPrice($minimalTicketPrice)
    {
        $this->minimalTicketPrice = $minimalTicketPrice;
    }

    public function getMaximalTicketPrice()
    {
        return $this->maximalTicketPrice;
    }
    public function setMaximalTicketPrice($maximalTicketPrice)
    {
        $this->maximalTicketPrice = $maximalTicketPrice;
    }
}

