using System.Collections.Generic;

namespace LTD_API
{
    public class GetEventPerformancesResult
    {
        public int EventId { get; set; }
        public List<PerformanceInfo> Performances { get; set; }
    }
}
