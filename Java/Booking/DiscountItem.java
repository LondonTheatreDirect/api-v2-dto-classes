package LTD_API;

public class DiscountItem
{
    private int orderItemId;
    private String name;
    private String code;
    private decimal price;
    
    public int getOrderItemId()
    {
        return orderItemId;
    }
    public void setOrderItemId(int orderItemId)
    {
        this.orderItemId = orderItemId;
    }

    public String getName()
    {
        return name;
    }
    public void setName(String name)
    {
        this.name = name;
    }

    public String getCode()
    {
        return code;
    }
    public void setCode(String code)
    {
        this.code = code;
    }

    public decimal getPrice()
    {
        return price;
    }
    public void setPrice(decimal price)
    {
        this.price = price;
    }
}

