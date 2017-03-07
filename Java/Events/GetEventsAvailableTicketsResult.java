package LTD_API;

import java.util.List;

public class GetEventsAvailableTicketsResult
{
    private List<AvailableEventInfo> availableEvents;
    
    public List<AvailableEventInfo> getAvailableEvents()
    {
        return availableEvents;
    }
    public void setAvailableEvents(List<AvailableEventInfo> availableEvents)
    {
        this.availableEvents = availableEvents;
    }
}

