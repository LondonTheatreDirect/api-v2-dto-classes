<?php
namespace LTD_API;

class Country
{
    private $countryId;
    private $countryName;
    private $ordering;
    private $iso3166;
    
    public function getCountryId()
    {
        return $this->countryId;
    }
    public function setCountryId($countryId)
    {
        $this->countryId = $countryId;
    }

    public function getCountryName()
    {
        return $this->countryName;
    }
    public function setCountryName($countryName)
    {
        $this->countryName = $countryName;
    }

    public function getOrdering()
    {
        return $this->ordering;
    }
    public function setOrdering($ordering)
    {
        $this->ordering = $ordering;
    }

    public function getIso3166()
    {
        return $this->iso3166;
    }
    public function setIso3166($iso3166)
    {
        $this->iso3166 = $iso3166;
    }
}

