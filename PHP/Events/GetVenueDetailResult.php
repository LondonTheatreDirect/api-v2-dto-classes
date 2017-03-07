<?php
namespace LTD_API;

class GetVenueDetailResult
{
    //instance of VenueInfo
    private $venue;
    
    public function getVenue()
    {
        return $this->venue;
    }
    public function setVenue($venue)
    {
        $this->venue = $venue;
    }
}

