namespace LTD_API
{
    public class FullTicketInfo
    {
        [DataMember]
        public int TicketId { get; set; }
        [DataMember]
        public string AreaName { get; set; }
        [DataMember]
        public string TicketName1 { get; set; }
        [DataMember]
        public string TicketName2 { get; set; }
        [DataMember]
        public decimal SellingPrice { get; set; }
        [DataMember]
        public decimal FaceValue { get; set; }
        [DataMember]
        public bool RestrictedView { get; set; }
        [DataMember]
        public string Description { get; set; }
    }
}
