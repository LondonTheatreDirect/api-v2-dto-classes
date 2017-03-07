<?php
namespace LTD_API;

class Performance
{
    private $performanceId;
    //date format
    private $performanceDate;
    private $isUnreserved;
    
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

    public function getIsUnreserved()
    {
        return $this->isUnreserved;
    }
    public function setIsUnreserved($isUnreserved)
    {
        $this->isUnreserved = $isUnreserved;
    }
}

