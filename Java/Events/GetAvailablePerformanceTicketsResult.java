package LTD_API;

import java.util.List;

public class GetAvailablePerformanceTicketsResult
{
    private int performanceId;
    private int eventId;
    private List<TicketAreaInfo> ticketAreas;
    
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

    public List<TicketAreaInfo> getTicketAreas()
    {
        return ticketAreas;
    }
    public void setTicketAreas(List<TicketAreaInfo> ticketAreas)
    {
        this.ticketAreas = ticketAreas;
    }
}

