package LTD_API;

import java.util.List;

public class ProtectionInformation
{
    private int protectedTicketsCount;
	private decimal totalProtectionPrice;
	
	public int getProtectedTicketsCount()
    {
        return protectedTicketsCount;
    }
    public void setProtectedTicketsCount(int protectedTicketsCount)
    {
        this.protectedTicketsCount = protectedTicketsCount;
    }

    public decimal getTotalProtectionPrice()
    {
        return totalProtectionPrice;
    }
    public void setTotalProtectionPrice(decimal totalProtectionPrice)
    {
        this.totalProtectionPrice = totalProtectionPrice;
    }
}