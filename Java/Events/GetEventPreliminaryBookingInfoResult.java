package LTD_API;

import java.util.List;

public class GetEventPreliminaryBookingInfoResult
{
    private List<PreliminaryPerformanceInfo> performances;
    
    public List<PreliminaryPerformanceInfo> getPerformances()
    {
        return performances;
    }
    public void setPerformances(List<PreliminaryPerformanceInfo> performances)
    {
        this.performances = performances;
    }
}

