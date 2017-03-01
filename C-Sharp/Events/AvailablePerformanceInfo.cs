using System;
using System.Collections.Generic;

namespace LTD_API
{
    public class AvailablePerformanceInfo
    {
        public int PerformanceId { get; set; }
        public DateTime PerformanceDate { get; set; }
        public decimal MinimumTicketPrice { get; set; }
        public List<AvailableTicketInfo> AvailableTicketInfos { get; set; }
        public List<AvailableTicketsBlockInfo> AvailableTicketsBlockInfos { get; set; }
    }
}
