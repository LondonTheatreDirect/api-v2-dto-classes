<?php
namespace LTD_API;

class GetPerformanceDetailResult
{
    //instance of PerformanceInfo
    private $performance;
    
    public function getPerformance()
    {
        return $this->performance;
    }
    public function setPerformance($performance)
    {
        $this->performance = $performance;
    }
}

