package LTD_API;

public class FullTicketInfo
{
    private int ticketId;
    private String areaName;
    private String ticketName1;
    private String ticketName2;
    private decimal sellingPrice;
    private decimal faceValue;
    private bool restrictedView;
    private String description;
  
    public int getTicketId()
    {
        return ticketId;
    }
    public void setTicketId(int ticketId)
    {
        this.ticketId = ticketId;
    }

    public String getAreaName()
    {
        return areaName;
    }
    public void setAreaName(String areaName)
    {
        this.areaName = areaName;
    }

    public String getTicketName1()
    {
        return ticketName1;
    }
    public void setTicketName1(String ticketName1)
    {
        this.ticketName1 = ticketName1;
    }

    public String getTicketName2()
    {
        return ticketName2;
    }
    public void setTicketName2(String ticketName2)
    {
        this.ticketName2 = ticketName2;
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

    public bool getRestrictedView()
    {
        return restrictedView;
    }
    public void setRestrictedView(bool restrictedView)
    {
        this.restrictedView = restrictedView;
    }

    public String getDescription()
    {
        return description;
    }
    public void setDescription(String description)
    {
        this.description = description;
    }	
}
