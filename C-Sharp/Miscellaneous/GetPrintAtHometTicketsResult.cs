using System.Collections.Generic;

namespace LTD_API
{
    public class GetPrintAtHomeTicketsResult
    {
        public GetPrintAtHomeTicketsResult()
        {
            GeneratedTickets = new List<GeneratedPrintAtHomeTicket>();
        }
        public bool AllTicketsGenerated { get; set; }
        public int RequestedTicketsCount { get; set; }
        public int GeneratedTicketsCount { get; set; }
        public List<GeneratedPrintAtHomeTicket> GeneratedTickets { get; set; }
    }
}
