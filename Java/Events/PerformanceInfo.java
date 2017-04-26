package LTD_API;

import java.util.Date;

public class PerformanceInfo
{
    private int performanceId;
    private Date performanceDate;
    private int ticketCount;
    private int totalAvailableTickesCount;
    private boolean containsDiscountOfferTickets;
    private boolean containsNoFeeOfferTickets;
    private decimal minimumTicketPrice;
    private int maximumConsecutiveSeatsCount;
    private int eventId;
    
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

    public int getTicketCount()
    {
        return ticketCount;
    }
    public void setTicketCount(int ticketCount)
    {
        this.ticketCount = ticketCount;
    }

    public int getTotalAvailableTickesCount()
    {
        return totalAvailableTickesCount;
    }
    public void setTotalAvailableTickesCount(int totalAvailableTickesCount)
    {
        this.totalAvailableTickesCount = totalAvailableTickesCount;
    }

    public boolean getContainsDiscountOfferTickets()
    {
        return containsDiscountOfferTickets;
    }
    public void setContainsDiscountOfferTickets(boolean containsDiscountOfferTickets)
    {
        this.containsDiscountOfferTickets = containsDiscountOfferTickets;
    }

    public boolean getContainsNoFeeOfferTickets()
    {
        return containsNoFeeOfferTickets;
    }
    public void setContainsNoFeeOfferTickets(boolean containsNoFeeOfferTickets)
    {
        this.containsNoFeeOfferTickets = containsNoFeeOfferTickets;
    }

    public decimal getMinimumTicketPrice()
    {
        return minimumTicketPrice;
    }
    public void setMinimumTicketPrice(decimal minimumTicketPrice)
    {
        this.minimumTicketPrice = minimumTicketPrice;
    }

    public int getMaximumConsecutiveSeatsCount()
    {
        return maximumConsecutiveSeatsCount;
    }
    public void setMaximumConsecutiveSeatsCount(int maximumConsecutiveSeatsCount)
    {
        this.maximumConsecutiveSeatsCount = maximumConsecutiveSeatsCount;
    }

    public int getEventId()
    {
        return eventId;
    }
    public void setEventId(int eventId)
    {
        this.eventId = eventId;
    }
}

