<?php
namespace LTD_API;

class USState
{
    private $stateId;
    private $stateName;
    private $stateCode;
    
    public function getStateId()
    {
        return $this->stateId;
    }
    public function setStateId($stateId)
    {
        $this->stateId = $stateId;
    }

    public function getStateName()
    {
        return $this->stateName;
    }
    public function setStateName($stateName)
    {
        $this->stateName = $stateName;
    }

    public function getStateCode()
    {
        return $this->stateCode;
    }
    public function setStateCode($stateCode)
    {
        $this->stateCode = $stateCode;
    }
}

