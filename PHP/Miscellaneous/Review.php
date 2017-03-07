<?php
namespace LTD_API;

class Review
{
    private $consumerName;
    private $stars;
    //date format
    private $createdAt;
    private $content;
    
    public function getConsumerName()
    {
        return $this->consumerName;
    }
    public function setConsumerName($consumerName)
    {
        $this->consumerName = $consumerName;
    }

    public function getStars()
    {
        return $this->stars;
    }
    public function setStars($stars)
    {
        $this->stars = $stars;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    public function getContent()
    {
        return $this->content;
    }
    public function setContent($content)
    {
        $this->content = $content;
    }
}

