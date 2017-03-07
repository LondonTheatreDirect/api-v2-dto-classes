package LTD_API;

public class ReleaseTicketFromBasketResult
{
    private bool success;
    private GetBasketContentResult getBasketContentResult;
    
    public bool getSuccess()
    {
        return success;
    }
    public void setSuccess(bool success)
    {
        this.success = success;
    }

    public GetBasketContentResult getGetBasketContentResult()
    {
        return getBasketContentResult;
    }
    public void setGetBasketContentResult(GetBasketContentResult getBasketContentResult)
    {
        this.getBasketContentResult = getBasketContentResult;
    }
}

