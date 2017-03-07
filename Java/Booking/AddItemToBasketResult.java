package LTD_API;

public class AddItemToBasketResult
{
    private bool success;
    private AddItemToBasketFailureReason failureReason;
    private GetBasketContentResult getBasketContentResult;
	
    public bool getSuccess()
    {
      return success;
    }
    public void setSuccess(bool success)
    {
      this.success = success;
    }

    public AddItemToBasketFailureReason getFailureReason()
    {
      return failureReason;
    }
    public void setFailureReason(AddItemToBasketFailureReason failureReason)
    {
      this.failureReason = failureReason;
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
