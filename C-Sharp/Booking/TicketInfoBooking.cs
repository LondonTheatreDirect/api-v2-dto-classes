namespace LTD_API
{
    public class TicketInfoBooking
    {
        public int TicketId { get; set; }
        public string TicketName1 { get; set; }
        public string TicketName2 { get; set; }
        public decimal FaceValue { get; set; }
        public decimal SellingPrice { get; set; }
        public bool IsRestrictedView { get; set; }
        public string RestrictionDescription { get; set; }
    }
}
