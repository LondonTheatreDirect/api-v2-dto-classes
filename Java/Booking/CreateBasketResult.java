package LTD_API;

public class CreateBasketResult
{
    private boolean success;
    private String basketId;
    
    public boolean getSuccess()
    {
        return success;
    }
    public void setSuccess(boolean success)
    {
        this.success = success;
    }
    
    public String getBasketId()
    {
        return basketId;
    }
    public void setBasketId(String basketId)
    {
        this.basketId = basketId;
    }
}
