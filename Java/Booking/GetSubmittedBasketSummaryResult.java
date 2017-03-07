package LTD_API;

import java.util.List;

public class GetSubmittedBasketSummaryResult
{
    private int transactionReference;
    private String basketId;
    private DeliveryInformation deliveryInformation;
    private List<BasketItem> basketItems;
    private String bookingReference;
    private DiscountInformation discountInformation;
    
    public int getTransactionReference()
    {
        return transactionReference;
    }
    public void setTransactionReference(int transactionReference)
    {
        this.transactionReference = transactionReference;
    }

    public String getBasketId()
    {
        return basketId;
    }
    public void setBasketId(String basketId)
    {
        this.basketId = basketId;
    }

    public DeliveryInformation getDeliveryInformation()
    {
        return deliveryInformation;
    }
    public void setDeliveryInformation(DeliveryInformation deliveryInformation)
    {
        this.deliveryInformation = deliveryInformation;
    }

    public List<BasketItem> getBasketItems()
    {
        return basketItems;
    }
    public void setBasketItems(List<BasketItem> basketItems)
    {
        this.basketItems = basketItems;
    }

    public String getBookingReference()
    {
        return bookingReference;
    }
    public void setBookingReference(String bookingReference)
    {
        this.bookingReference = bookingReference;
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

