package LTD_API;

public class SubmitOrderResult
{
    private boolean success;
    private String paymentRedirectUrl;
    
    public boolean getSuccess()
    {
        return success;
    }
    public void setSuccess(boolean success)
    {
        this.success = success;
    }

    public String getPaymentRedirectUrl()
    {
        return paymentRedirectUrl;
    }
    public void setPaymentRedirectUrl(String paymentRedirectUrl)
    {
        this.paymentRedirectUrl = paymentRedirectUrl;
    }
}

