package LTD_API;

public class CreateBasketResult
{
    private bool success;
    private String basketId;
    
    public bool getSuccess()
    {
        return success;
    }
    public void setSuccess(bool success)
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
