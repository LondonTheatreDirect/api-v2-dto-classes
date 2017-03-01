namespace LTD_API
{
    public class AvailableTicketInfo
    {
        public int VenueId { get; set; }
        public string VenueName { get; set; }
        public string VenueAddress { get; set; }
        public string VenueCity { get; set; }
        public string TicketName1 { get; set; }
        public string TicketName2 { get; set; }
        public int AdjacencyIndex { get; set; }
        public decimal FaceValue { get; set; }
        public decimal SellingPrice { get; set; }
        public string DirectBookingUrl { get; set; }
        public string TicketArea { get; set; }
        public int TicketId { get; set; }
        public bool IsRestrictedView { get; set; }
        public string RestrictionDescription { get; set; }
    }
}
