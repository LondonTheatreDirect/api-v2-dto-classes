package LTD_API;

import java.util.List;

public class GetReviewsResult
{
    private List<Review> reviews;
    private int reviewsCount;
    private double averageRating;
    private int highestPossibleRating;
    private int currentReviewsCount;
    private int currentReviewsFrom;
    
    public List<Review> getReviews()
    {
        return reviews;
    }
    public void setReviews(List<Review> reviews)
    {
        this.reviews = reviews;
    }

    public int getReviewsCount()
    {
        return reviewsCount;
    }
    public void setReviewsCount(int reviewsCount)
    {
        this.reviewsCount = reviewsCount;
    }

    public double getAverageRating()
    {
        return averageRating;
    }
    public void setAverageRating(double averageRating)
    {
        this.averageRating = averageRating;
    }

    public int getHighestPossibleRating()
    {
        return highestPossibleRating;
    }
    public void setHighestPossibleRating(int highestPossibleRating)
    {
        this.highestPossibleRating = highestPossibleRating;
    }

    public int getCurrentReviewsCount()
    {
        return currentReviewsCount;
    }
    public void setCurrentReviewsCount(int currentReviewsCount)
    {
        this.currentReviewsCount = currentReviewsCount;
    }

    public int getCurrentReviewsFrom()
    {
        return currentReviewsFrom;
    }
    public void setCurrentReviewsFrom(int currentReviewsFrom)
    {
        this.currentReviewsFrom = currentReviewsFrom;
    }
}

