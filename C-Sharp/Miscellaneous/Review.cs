using System;

namespace LTD_API
{
    public class Review
    {
        public string ConsumerName { get; set; }
        public int Stars { get; set; }
        public DateTime CreatedAt { get; set; }
        public string Content { get; set; }
    }
}
