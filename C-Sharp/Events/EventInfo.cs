using System;
using System.Collections.Generic;

namespace LTD_API
{
    public class EventInfo
    {
        public int EventId { get; set; }
        public int EventType { get; set; }
        public string Name { get; set; }
        public string Description { get; set; }
        public int VenueId { get; set; }
        public string RunningTime { get; set; }
        public string MinimumAge { get; set; }
        public string ImportantNotice { get; set; }
        public string MainImageUrl { get; set; }
        public string SmallImageUrl { get; set; }
        public string SpecialGraphics { get; set; }
        public string ShortOfferText { get; set; }
        public string LongOfferText { get; set; }
        public decimal CurrentPrice { get; set; }
        public decimal OfferPrice { get; set; }
        public DateTime? StartDate { get; set; }
        public DateTime? EndDate { get; set; }
        public decimal EventMinimumPrice { get; set; }
        public List<Image> Images { get; set; }
        public List<EventMultimediaContent> MultimediaContent { get; set; }
        public string EventDetailUrl { get; set; }
        public string TagLine { get; set; }
        public bool PrintAtHomeTicketsEnabled { get; set; }
    }
}
