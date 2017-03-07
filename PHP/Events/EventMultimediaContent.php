<?php
namespace LTD_API;

class EventMultimediaContent
{
    //instance of EventMultimediaContentType
    private $type;
    private $url;
    
    public function getType()
    {
        return $this->type;
    }
    public function setType($type)
    {
        $this->type = $type;
    }

    public function getUrl()
    {
        return $this->url;
    }
    public function setUrl($url)
    {
        $this->url = $url;
    }
}

