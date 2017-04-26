package LTD_API;

public class ReleaseTicketFromBasketResult
{
    private boolean success;
    private GetBasketContentResult getBasketContentResult;
    
    public boolean getSuccess()
    {
        return success;
    }
    public void setSuccess(boolean success)
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

