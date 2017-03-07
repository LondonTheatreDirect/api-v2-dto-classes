package LTD_API;

public class DeliveryType
{
    private int deliveryTypeId;
    private String deliveryTypeName;
    private decimal deliveryTypePrice;
    
    public int getDeliveryTypeId()
    {
        return deliveryTypeId;
    }
    public void setDeliveryTypeId(int deliveryTypeId)
    {
        this.deliveryTypeId = deliveryTypeId;
    }

    public String getDeliveryTypeName()
    {
        return deliveryTypeName;
    }
    public void setDeliveryTypeName(String deliveryTypeName)
    {
        this.deliveryTypeName = deliveryTypeName;
    }

    public decimal getDeliveryTypePrice()
    {
        return deliveryTypePrice;
    }
    public void setDeliveryTypePrice(decimal deliveryTypePrice)
    {
        this.deliveryTypePrice = deliveryTypePrice;
    }
}

