<?php
namespace LTD_API;

class GetReviewsResult
{
    //array of Review
    private $reviews;
    private $reviewsCount;
    //instance of double
    private $averageRating;
    private $highestPossibleRating;
    private $currentReviewsCount;
    private $currentReviewsFrom;
    
    public function getReviews()
    {
        return $this->reviews;
    }
    public function setReviews($reviews)
    {
        $this->reviews = $reviews;
    }

    public function getReviewsCount()
    {
        return $this->reviewsCount;
    }
    public function setReviewsCount($reviewsCount)
    {
        $this->reviewsCount = $reviewsCount;
    }

    public function getAverageRating()
    {
        return $this->averageRating;
    }
    public function setAverageRating($averageRating)
    {
        $this->averageRating = $averageRating;
    }

    public function getHighestPossibleRating()
    {
        return $this->highestPossibleRating;
    }
    public function setHighestPossibleRating($highestPossibleRating)
    {
        $this->highestPossibleRating = $highestPossibleRating;
    }

    public function getCurrentReviewsCount()
    {
        return $this->currentReviewsCount;
    }
    public function setCurrentReviewsCount($currentReviewsCount)
    {
        $this->currentReviewsCount = $currentReviewsCount;
    }

    public function getCurrentReviewsFrom()
    {
        return $this->currentReviewsFrom;
    }
    public function setCurrentReviewsFrom($currentReviewsFrom)
    {
        $this->currentReviewsFrom = $currentReviewsFrom;
    }
}

