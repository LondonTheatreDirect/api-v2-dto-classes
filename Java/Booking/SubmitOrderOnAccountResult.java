package LTD_API;

public class SubmitOrderResult
{
    private bool success;
    private String BookingReference;
    
    public bool getSuccess()
    {
        return success;
    }
    public void setSuccess(bool success)
    {
        this.success = success;
    }

    public String getBookingReference()
    {
        return BookingReference;
    }
    public void setBookingReference(String BookingReference)
    {
        this.BookingReference = BookingReference;
    }
}

