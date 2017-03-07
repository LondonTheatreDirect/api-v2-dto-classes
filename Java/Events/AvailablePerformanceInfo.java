package LTD_API;

import java.util.Date;
import java.util.List;

public class AvailablePerformanceInfo
{
    private int performanceId;
    private Date performanceDate;
    private decimal minimumTicketPrice;
    private List<AvailableTicketInfo> availableTicketInfos;
    private List<AvailableTicketsBlockInfo> availableTicketsBlockInfos;
    
    public int getPerformanceId()
    {
        return performanceId;
    }
    public void setPerformanceId(int performanceId)
    {
        this.performanceId = performanceId;
    }

    public Date getPerformanceDate()
    {
        return performanceDate;
    }
    public void setPerformanceDate(Date performanceDate)
    {
        this.performanceDate = performanceDate;
    }

    public decimal getMinimumTicketPrice()
    {
        return minimumTicketPrice;
    }
    public void setMinimumTicketPrice(decimal minimumTicketPrice)
    {
        this.minimumTicketPrice = minimumTicketPrice;
    }

    public List<AvailableTicketInfo> getAvailableTicketInfos()
    {
        return availableTicketInfos;
    }
    public void setAvailableTicketInfos(List<AvailableTicketInfo> availableTicketInfos)
    {
        this.availableTicketInfos = availableTicketInfos;
    }

    public List<AvailableTicketsBlockInfo> getAvailableTicketsBlockInfos()
    {
        return availableTicketsBlockInfos;
    }
    public void setAvailableTicketsBlockInfos(List<AvailableTicketsBlockInfo> availableTicketsBlockInfos)
    {
        this.availableTicketsBlockInfos = availableTicketsBlockInfos;
    }
}

