package LTD_API;

public class CheckTicketAvailabilityResult
{
    private int ticketId;
    private boolean isAvailable;
    
    public int getTicketId()
    {
        return ticketId;
    }
    public void setTicketId(int ticketId)
    {
        this.ticketId = ticketId;
    }

    public boolean getIsAvailable()
    {
        return isAvailable;
    }
    public void setIsAvailable(boolean isAvailable)
    {
        this.isAvailable = isAvailable;
    }
}

