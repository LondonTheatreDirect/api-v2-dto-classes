package LTD_API;

import java.util.List;

public class GeneratedPrintAtHomeTicket
{
    private PrintAtHomeTicketInfo ticket;
	private int? fileSize;
	private String downloadUrl;
	
	public PrintAtHomeTicketInfo getTicket()
    {
        return ticket;
    }
    public void setTicket(PrintAtHomeTicketInfo ticket)
    {
        this.ticket = ticket;
    }

	public int? getFileSize()
    {
        return fileSize;
    }
    public void setFileSize(int? fileSize)
    {
        this.fileSize = fileSize;
    }

	public String getDownloadUrl()
    {
        return downloadUrl;
    }
    public void setDownloadUrl(String downloadUrl)
    {
        this.downloadUrl = downloadUrl;
    }
}