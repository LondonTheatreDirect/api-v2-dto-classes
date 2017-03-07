package LTD_API;

import java.util.List;

public class GetEventPerformancesResult
{
    private int eventId;
    private List<PerformanceInfo> performances;
    
    public int getEventId()
    {
        return eventId;
    }
    public void setEventId(int eventId)
    {
        this.eventId = eventId;
    }

    public List<PerformanceInfo> getPerformances()
    {
        return performances;
    }
    public void setPerformances(List<PerformanceInfo> performances)
    {
        this.performances = performances;
    }
}

