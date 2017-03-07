package LTD_API;

public class SubmitOrderResult
{
    private bool success;
    private String paymentRedirectUrl;
    
    public bool getSuccess()
    {
        return success;
    }
    public void setSuccess(bool success)
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

