package LTD_API;

import java.util.List;

public class AvailableEventInfo
{
    private String eventName;
    private int eventId;
    private List<AvailablePerformanceInfo> availablePerformanceInfos;
    
    public String getEventName()
    {
        return eventName;
    }
    public void setEventName(String eventName)
    {
        this.eventName = eventName;
    }

    public int getEventId()
    {
        return eventId;
    }
    public void setEventId(int eventId)
    {
        this.eventId = eventId;
    }

    public List<AvailablePerformanceInfo> getAvailablePerformanceInfos()
    {
        return availablePerformanceInfos;
    }
    public void setAvailablePerformanceInfos(List<AvailablePerformanceInfo> availablePerformanceInfos)
    {
        this.availablePerformanceInfos = availablePerformanceInfos;
    }
}
