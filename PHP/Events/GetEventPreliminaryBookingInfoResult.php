<?php
namespace LTD_API;

class GetEventPreliminaryBookingInfoResult
{
    //array of PreliminaryPerformanceInfo
    private $performances;
    
    public function getPerformances()
    {
        return $this->performances;
    }
    public function setPerformances($performances)
    {
        $this->performances = $performances;
    }
}

