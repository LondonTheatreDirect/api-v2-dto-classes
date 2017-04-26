package LTD_API;

public class SubmitOrderResult
{
    private bool success;
    private String bookingReference;
    
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
        return bookingReference;
    }
    public void setBookingReference(String bookingReference)
    {
        this.bookingReference = bookingReference;
    }
}

