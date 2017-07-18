package LTD_API;

import java.util.List;

public class GetFullPerformanceAvailabilityResult
{
    private int performanceId;
    private int eventId;
    private List<FullTicketInfo> availableTickets;
	
    public int getPerformanceId()
    {
        return performanceId;
    }
    public void setPerformanceId(int performanceId)
    {
        this.performanceId = performanceId;
    }

    public int getEventId()
    {
        return eventId;
    }
    public void setEventId(int eventId)
    {
        this.eventId = eventId;
    }

    public List<FullTicketInfo> getAvailableTickets()
    {
        return availableTickets;
    }
    public void setAvailableTickets(List<FullTicketInfo> availableTickets)
    {
        this.availableTickets = availableTickets;
    }
}
