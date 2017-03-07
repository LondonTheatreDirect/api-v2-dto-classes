package LTD_API;

import java.util.Date;
import java.util.List;

public class GetBasketContentResult
{
    private String basketId;
    private Date minExpirationDate;
    private DeliveryInformation deliveryInformation;
    private List<BasketItem> items;
    private DiscountInformation discountInformation;

    public String getBasketId()
    {
        return basketId;
    }
    public void setBasketId(String basketId)
    {
        this.basketId = basketId;
    }

    public Date getMinExpirationDate()
    {
        return minExpirationDate;
    }
    public void setMinExpirationDate(Date minExpirationDate)
    {
        this.minExpirationDate = minExpirationDate;
    }

    public DeliveryInformation getDeliveryInformation()
    {
        return deliveryInformation;
    }
    public void setDeliveryInformation(DeliveryInformation deliveryInformation)
    {
        this.deliveryInformation = deliveryInformation;
    }

    public List<BasketItem> getItems()
    {
        return items;
    }
    public void setItems(List<BasketItem> items)
    {
        this.items = items;
    }

    public DiscountInformation getDiscountInformation()
    {
        return discountInformation;
    }
    public void setDiscountInformation(DiscountInformation discountInformation)
    {
        this.discountInformation = discountInformation;
    }
}

