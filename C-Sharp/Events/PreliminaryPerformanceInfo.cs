using System;

namespace LTD_API
{
    public class PreliminaryPerformanceInfo
    {
        public int PerformanceId { get; set; }
        public DateTime PerformanceDate { get; set; }
        public decimal MinimalTicketPrice { get; set; }
        public decimal MaximalTicketPrice { get; set; }
    }
}
