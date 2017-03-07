using System;
using System.Collections.Generic;

namespace LTD_API
{
    public class BasketItem
    {
        public int BasketItemId { get; set; }
        public int EventId { get; set; }
        public string EventName { get; set; }
        public string ImageUrl { get; set; }
        public DateTime PerformanceDate { get; set; }
        public string AreaName { get; set; }
        public List<string> Seats { get; set; }
        public List<TicketInfoBooking> Tickets { get; set; }
        public int VenueId { get; set; }
        public string VenueName { get; set; }
        public string VenueAddress { get; set; }
        public string VenueCity { get; set; }
        public string VenuePostCode { get; set; }
        public decimal PriceSubTotal { get; set; }
        public int ReservationValidity { get; set; }
        public DateTime ExpirationDate { get; set; }
    }
}
