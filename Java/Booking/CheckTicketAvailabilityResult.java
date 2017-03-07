package LTD_API;

public class CheckTicketAvailabilityResult
{
    private int ticketId;
    private bool isAvailable;
    
    public int getTicketId()
    {
        return ticketId;
    }
    public void setTicketId(int ticketId)
    {
        this.ticketId = ticketId;
    }

    public bool getIsAvailable()
    {
        return isAvailable;
    }
    public void setIsAvailable(bool isAvailable)
    {
        this.isAvailable = isAvailable;
    }
}

