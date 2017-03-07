package LTD_API;

import java.util.List;

public class TicketAreaInfo
{
    private String areaName;
    private decimal sellingPrice;
    private decimal faceValue;
    private String ticketName1;
    private List<TicketInfo> tickets;
    private String singleItemBookLink;
    
    public String getAreaName()
    {
        return areaName;
    }
    public void setAreaName(String areaName)
    {
        this.areaName = areaName;
    }

    public decimal getSellingPrice()
    {
        return sellingPrice;
    }
    public void setSellingPrice(decimal sellingPrice)
    {
        this.sellingPrice = sellingPrice;
    }

    public decimal getFaceValue()
    {
        return faceValue;
    }
    public void setFaceValue(decimal faceValue)
    {
        this.faceValue = faceValue;
    }

    public String getTicketName1()
    {
        return ticketName1;
    }
    public void setTicketName1(String ticketName1)
    {
        this.ticketName1 = ticketName1;
    }

    public List<TicketInfo> getTickets()
    {
        return tickets;
    }
    public void setTickets(List<TicketInfo> tickets)
    {
        this.tickets = tickets;
    }

    public String getSingleItemBookLink()
    {
        return singleItemBookLink;
    }
    public void setSingleItemBookLink(String singleItemBookLink)
    {
        this.singleItemBookLink = singleItemBookLink;
    }
}

