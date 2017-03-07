<?php
namespace LTD_API;

class GetUSStatesResult
{
    //array of USState
    private $usStates;

    public function getUsStates()
    {
        return $this->usStates;
    }
    public function setUsStates($usStates)
    {
        $this->usStates = $usStates;
    }
}

