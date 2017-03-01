using System;

namespace LTD_API
{
    public class PerformanceInfo
    {
        public int PerformanceId { get; set; }
        public DateTime PerformanceDate { get; set; }
        public int TicketCount { get; set; }
        public int TotalAvailableTickesCount { get; set; }
        public bool ContainsDiscountOfferTickets { get; set; }
        public bool ContainsNoFeeOfferTickets { get; set; }
        public decimal MinimumTicketPrice { get; set; }
        public int MaximumConsecutiveSeatsCount { get; set; }
        public int EventId { get; set; }
    }
}
