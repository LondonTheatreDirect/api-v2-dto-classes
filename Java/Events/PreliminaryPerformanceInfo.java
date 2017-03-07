package LTD_API;

import java.util.Date;

public class PreliminaryPerformanceInfo
{
    private int performanceId;
    private Date performanceDate;
    private decimal minimalTicketPrice;
    private decimal maximalTicketPrice;
    
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

    public decimal getMinimalTicketPrice()
    {
        return minimalTicketPrice;
    }
    public void setMinimalTicketPrice(decimal minimalTicketPrice)
    {
        this.minimalTicketPrice = minimalTicketPrice;
    }

    public decimal getMaximalTicketPrice()
    {
        return maximalTicketPrice;
    }
    public void setMaximalTicketPrice(decimal maximalTicketPrice)
    {
        this.maximalTicketPrice = maximalTicketPrice;
    }
}

