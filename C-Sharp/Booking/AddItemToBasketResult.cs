namespace LTD_API
{
    public class AddItemToBasketResult
    {
        public bool Success { get; set; }
        public AddItemToBasketFailureReason FailureReason { get; set; }
        public GetBasketContentResult GetBasketContentResult { get; set; }
    }
}
