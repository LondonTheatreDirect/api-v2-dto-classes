package LTD_API;

public class AvailableTicketInfo
{
    private int venueId;
    private String venueName;
    private String venueAddress;
    private String venueCity;
    private String ticketName1;
    private String ticketName2;
    private int adjacencyIndex;
    private decimal faceValue;
    private decimal sellingPrice;
    private String directBookingUrl;
    private String ticketArea;
    private int ticketId;
    private bool isRestrictedView;
    private String restrictionDescription;
    
    public int getVenueId()
    {
        return venueId;
    }
    public void setVenueId(int venueId)
    {
        this.venueId = venueId;
    }

    public String getVenueName()
    {
        return venueName;
    }
    public void setVenueName(String venueName)
    {
        this.venueName = venueName;
    }

    public String getVenueAddress()
    {
        return venueAddress;
    }
    public void setVenueAddress(String venueAddress)
    {
        this.venueAddress = venueAddress;
    }

    public String getVenueCity()
    {
        return venueCity;
    }
    public void setVenueCity(String venueCity)
    {
        this.venueCity = venueCity;
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

    public int getAdjacencyIndex()
    {
        return adjacencyIndex;
    }
    public void setAdjacencyIndex(int adjacencyIndex)
    {
        this.adjacencyIndex = adjacencyIndex;
    }

    public decimal getFaceValue()
    {
        return faceValue;
    }
    public void setFaceValue(decimal faceValue)
    {
        this.faceValue = faceValue;
    }

    public decimal getSellingPrice()
    {
        return sellingPrice;
    }
    public void setSellingPrice(decimal sellingPrice)
    {
        this.sellingPrice = sellingPrice;
    }

    public String getDirectBookingUrl()
    {
        return directBookingUrl;
    }
    public void setDirectBookingUrl(String directBookingUrl)
    {
        this.directBookingUrl = directBookingUrl;
    }

    public String getTicketArea()
    {
        return ticketArea;
    }
    public void setTicketArea(String ticketArea)
    {
        this.ticketArea = ticketArea;
    }

    public int getTicketId()
    {
        return ticketId;
    }
    public void setTicketId(int ticketId)
    {
        this.ticketId = ticketId;
    }

    public bool getIsRestrictedView()
    {
        return isRestrictedView;
    }
    public void setIsRestrictedView(bool isRestrictedView)
    {
        this.isRestrictedView = isRestrictedView;
    }

    public String getRestrictionDescription()
    {
        return restrictionDescription;
    }
    public void setRestrictionDescription(String restrictionDescription)
    {
        this.restrictionDescription = restrictionDescription;
    }
}
