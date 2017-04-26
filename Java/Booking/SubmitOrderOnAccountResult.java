package LTD_API;

public class SubmitOrderResult
{
    private boolean success;
    private String bookingReference;
    
    public boolean getSuccess()
    {
        return success;
    }
    public void setSuccess(boolean success)
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

