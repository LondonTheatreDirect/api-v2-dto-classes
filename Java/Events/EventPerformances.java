package LTD_API;

import java.util.List;

public class EventPerformances
{
    private int eventId;
    private List<Performance> performances;
    
    public int getEventId()
    {
        return eventId;
    }
    public void setEventId(int eventId)
    {
        this.eventId = eventId;
    }

    public List<Performance> getPerformances()
    {
        return performances;
    }
    public void setPerformances(List<Performance> performances)
    {
        this.performances = performances;
    }
}

