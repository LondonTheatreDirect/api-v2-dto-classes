package LTD_API;

import java.util.List;

public class GetEventListResult
{
    private List<EventInfo> events;
    
    public List<EventInfo> getEvents()
    {
        return events;
    }
    public void setEvents(List<EventInfo> events)
    {
        this.events = events;
    }
}

