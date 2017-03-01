using System.Collections.Generic;

namespace LTD_API
{
    public class AvailableTicketsBlockInfo
    {
        public string AreaName { get; set; }
        public decimal FacePrice { get; set; }
        public decimal SellingPrice { get; set; }
        public List<AvailableTicketInfo> AvailableTicketsInfos { get; set; }

        private string tempRow;
    }
}
