package LTD_API;

import java.util.List;

public class GetPrintAtHomeTicketsResult
{
    private bool allTicketsGenerated;
	private int requestedTicketsCount;
	private int generatedTicketsCount;
	private List<GeneratedPrintAtHomeTicket> generatedTickets;
	
	public bool getAllTicketsGenerated()
    {
        return allTicketsGenerated;
    }
    public void setAllTicketsGenerated(bool allTicketsGenerated)
    {
        this.allTicketsGenerated = allTicketsGenerated;
    }

	public int getRequestedTicketsCount()
    {
        return requestedTicketsCount;
    }
    public void setRequestedTicketsCount(int requestedTicketsCount)
    {
        this.requestedTicketsCount = requestedTicketsCount;
    }

	public int getGeneratedTicketsCount()
    {
        return generatedTicketsCount;
    }
    public void setGeneratedTicketsCount(int generatedTicketsCount)
    {
        this.generatedTicketsCount = generatedTicketsCount;
    }

	public List<GeneratedPrintAtHomeTicket> getGeneratedTickets()
    {
        return generatedTickets;
    }
    public void setGeneratedTickets(List<GeneratedPrintAtHomeTicket> generatedTickets)
    {
        this.generatedTickets = generatedTickets;
    }
}