using System.Collections.Generic;

namespace LTD_API
{
    public class GetReviewsResult
    {
        public List<Review> Reviews { get; set; }
        public int ReviewsCount { get; set; }
        public double AverageRating { get; set; }
        public int HighestPossibleRating { get; set; }
        public int CurrentReviewsCount { get; set; }
        public int CurrentReviewsFrom { get; set; }
    }
}
