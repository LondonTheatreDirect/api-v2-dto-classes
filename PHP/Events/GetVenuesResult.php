<?php
namespace LTD_API;

class GetVenuesResult
{
    //array of VenueInfo
    private $venues;
    
    public function getVenues()
    {
        return $this->venues;
    }
    public function setVenues($venues)
    {
        $this->venues = $venues;
    }
}

