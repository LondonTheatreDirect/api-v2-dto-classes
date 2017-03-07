<?php
namespace LTD_API;

class EventInfo
{
    private $eventId;
    private $eventType;
    private $name;
    private $description;
    private $venueId;
    private $runningTime;
    private $minimumAge;
    private $importantNotice;
    private $mainImageUrl;
    private $smallImageUrl;
    private $specialGraphics;
    private $shortOfferText;
    private $longOfferText;
    private $currentPrice;
    private $offerPrice;
    //date format
    private $startDate;
    //date format
    private $endDate;
    private $eventMinimumPrice;
    //array of Image
    private $images;
    //array of EventMultimediaContent
    private $multimediaContent;
    private $eventDetailUrl;
    private $tagLine;
    private $printAtHomeTicketsEnabled;
    
    public function getEventId()
    {
        return $this->eventId;
    }
    public function setEventId($eventId)
    {
        $this->eventId = $eventId;
    }

    public function getEventType()
    {
        return $this->eventType;
    }
    public function setEventType($eventType)
    {
        $this->eventType = $eventType;
    }

    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getDescription()
    {
        return $this->description;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getVenueId()
    {
        return $this->venueId;
    }
    public function setVenueId($venueId)
    {
        $this->venueId = $venueId;
    }

    public function getRunningTime()
    {
        return $this->runningTime;
    }
    public function setRunningTime($runningTime)
    {
        $this->runningTime = $runningTime;
    }

    public function getMinimumAge()
    {
        return $this->minimumAge;
    }
    public function setMinimumAge($minimumAge)
    {
        $this->minimumAge = $minimumAge;
    }

    public function getImportantNotice()
    {
        return $this->importantNotice;
    }
    public function setImportantNotice($importantNotice)
    {
        $this->importantNotice = $importantNotice;
    }

    public function getMainImageUrl()
    {
        return $this->mainImageUrl;
    }
    public function setMainImageUrl($mainImageUrl)
    {
        $this->mainImageUrl = $mainImageUrl;
    }

    public function getSmallImageUrl()
    {
        return $this->smallImageUrl;
    }
    public function setSmallImageUrl($smallImageUrl)
    {
        $this->smallImageUrl = $smallImageUrl;
    }

    public function getSpecialGraphics()
    {
        return $this->specialGraphics;
    }
    public function setSpecialGraphics($specialGraphics)
    {
        $this->specialGraphics = $specialGraphics;
    }

    public function getShortOfferText()
    {
        return $this->shortOfferText;
    }
    public function setShortOfferText($shortOfferText)
    {
        $this->shortOfferText = $shortOfferText;
    }

    public function getLongOfferText()
    {
        return $this->longOfferText;
    }
    public function setLongOfferText($longOfferText)
    {
        $this->longOfferText = $longOfferText;
    }

    public function getCurrentPrice()
    {
        return $this->currentPrice;
    }
    public function setCurrentPrice($currentPrice)
    {
        $this->currentPrice = $currentPrice;
    }

    public function getOfferPrice()
    {
        return $this->offerPrice;
    }
    public function setOfferPrice($offerPrice)
    {
        $this->offerPrice = $offerPrice;
    }

    public function getStartDate()
    {
        return $this->startDate;
    }
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    public function getEndDate()
    {
        return $this->endDate;
    }
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }

    public function getEventMinimumPrice()
    {
        return $this->eventMinimumPrice;
    }
    public function setEventMinimumPrice($eventMinimumPrice)
    {
        $this->eventMinimumPrice = $eventMinimumPrice;
    }

    public function getImages()
    {
        return $this->images;
    }
    public function setImages($images)
    {
        $this->images = $images;
    }

    public function getMultimediaContent()
    {
        return $this->multimediaContent;
    }
    public function setMultimediaContent($multimediaContent)
    {
        $this->multimediaContent = $multimediaContent;
    }

    public function getEventDetailUrl()
    {
        return $this->eventDetailUrl;
    }
    public function setEventDetailUrl($eventDetailUrl)
    {
        $this->eventDetailUrl = $eventDetailUrl;
    }

    public function getTagLine()
    {
        return $this->tagLine;
    }
    public function setTagLine($tagLine)
    {
        $this->tagLine = $tagLine;
    }

    public function getPrintAtHomeTicketsEnabled()
    {
        return $this->printAtHomeTicketsEnabled;
    }
    public function setPrintAtHomeTicketsEnabled($printAtHomeTicketsEnabled)
    {
        $this->printAtHomeTicketsEnabled = $printAtHomeTicketsEnabled;
    }
}


