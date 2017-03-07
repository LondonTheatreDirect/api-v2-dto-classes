<?php
namespace LTD_API;

class VenueInfo
{
    private $venueId;
    private $name;
    private $info;
    private $address;
    private $city;
    private $postcode;
    private $telephone;
    private $fax;
    private $email;
    private $nearestTube;
    private $train;
    private $planLink;
    private $imageUrl;
    
    public function getVenueId()
    {
        return $this->venueId;
    }
    public function setVenueId($venueId)
    {
        $this->venueId = $venueId;
    }

    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getInfo()
    {
        return $this->info;
    }
    public function setInfo($info)
    {
        $this->info = $info;
    }

    public function getAddress()
    {
        return $this->address;
    }
    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getCity()
    {
        return $this->city;
    }
    public function setCity($city)
    {
        $this->city = $city;
    }

    public function getPostcode()
    {
        return $this->postcode;
    }
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;
    }

    public function getTelephone()
    {
        return $this->telephone;
    }
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    public function getFax()
    {
        return $this->fax;
    }
    public function setFax($fax)
    {
        $this->fax = $fax;
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getNearestTube()
    {
        return $this->nearestTube;
    }
    public function setNearestTube($nearestTube)
    {
        $this->nearestTube = $nearestTube;
    }

    public function getTrain()
    {
        return $this->train;
    }
    public function setTrain($train)
    {
        $this->train = $train;
    }

    public function getPlanLink()
    {
        return $this->planLink;
    }
    public function setPlanLink($planLink)
    {
        $this->planLink = $planLink;
    }

    public function getImageUrl()
    {
        return $this->imageUrl;
    }
    public function setImageUrl($imageUrl)
    {
        $this->imageUrl = $imageUrl;
    }
}

