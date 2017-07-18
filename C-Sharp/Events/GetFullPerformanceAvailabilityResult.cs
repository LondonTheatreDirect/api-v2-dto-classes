using System.Collections.Generic;

namespace LTD_API
{
    public class GetFullPerformanceAvailabilityResult
    {
        public int PerformanceId { get; set; }
        public int EventId { get; set; }
        public List<FullTicketInfo> AvailableTickets { get; set; }
    }
}