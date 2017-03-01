using System.Collections.Generic;

namespace LTD_API
{
    public class GetAvailablePerformanceTicketsResult
    {
        public int PerformanceId { get; set; }
        public int EventId { get; set; }
        public List<TicketAreaInfo> TicketAreas { get; set; }
    }
}
