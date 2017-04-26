package LTD_API;

public class TicketInfo
{
    private int ticketId;
    private String ticketName1;
    private String ticketName2;
    private boolean isRestrictedView;
    private String restrictionDescription;
    
    public int getTicketId()
    {
        return ticketId;
    }
    public void setTicketId(int ticketId)
    {
        this.ticketId = ticketId;
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

    public boolean getIsRestrictedView()
    {
        return isRestrictedView;
    }
    public void setIsRestrictedView(boolean isRestrictedView)
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

