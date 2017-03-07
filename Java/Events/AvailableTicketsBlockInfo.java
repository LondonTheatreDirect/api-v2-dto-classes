package LTD_API;

import java.util.List;

public class AvailableTicketsBlockInfo
{
    private String areaName;
    private decimal facePrice;
    private decimal sellingPrice;
    private List<AvailableTicketInfo> availableTicketsInfos;
    
    public String getAreaName()
    {
        return areaName;
    }
    public void setAreaName(String areaName)
    {
        this.areaName = areaName;
    }

    public decimal getFacePrice()
    {
        return facePrice;
    }
    public void setFacePrice(decimal facePrice)
    {
        this.facePrice = facePrice;
    }

    public decimal getSellingPrice()
    {
        return sellingPrice;
    }
    public void setSellingPrice(decimal sellingPrice)
    {
        this.sellingPrice = sellingPrice;
    }

    public List<AvailableTicketInfo> getAvailableTicketsInfos()
    {
        return availableTicketsInfos;
    }
    public void setAvailableTicketsInfos(List<AvailableTicketInfo> availableTicketsInfos)
    {
        this.availableTicketsInfos = availableTicketsInfos;
    }
}

