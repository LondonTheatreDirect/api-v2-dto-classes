<?php
namespace LTD_API;

class GetCountriesResult
{
    //array of Country
    private $countries = array();
    
    public function getCountries()
    {
        return $this->countries;
    }
    public function setCountries($countries)
    {
        $this->countries = $countries;
    }
}

