using System.Collections.Generic;

namespace LTD_API
{
    public class TicketAreaInfo
    {
        public string AreaName { get; set; }
        public decimal SellingPrice { get; set; }
        public decimal FaceValue { get; set; }
        public string TicketName1 { get; set; }
        public List<TicketInfo> Tickets { get; set; }
        public string SingleItemBookLink { get; set; }
    }
}
