package LTD_API;

import java.util.List;

public class DiscountInformation
{
    private List<DiscountItem> discounts;
    
    public List<DiscountItem> getDiscounts()
    {
        return discounts;
    }
    public void setDiscounts(List<DiscountItem> discounts)
    {
        this.discounts = discounts;
    }
}

