using System.Collections.Generic;

namespace LTD_API
{
    public class AvailableEventInfo
    {
        public string EventName { get; set; }
        public int EventId { get; set; }
        public List<AvailablePerformanceInfo> AvailablePerformanceInfos { get; set; }
    }
}
