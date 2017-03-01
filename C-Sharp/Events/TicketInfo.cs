namespace LTD_API
{
    public class TicketInfo
    {
        public int TicketId { get; set; }
        public string TicketName1 { get; set; }
        public string TicketName2 { get; set; }
        public bool IsRestrictedView { get; set; }
        public string RestrictionDescription { get; set; }
    }
}
