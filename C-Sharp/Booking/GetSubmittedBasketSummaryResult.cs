using System;
using System.Collections.Generic;

namespace LTD_API
{
    public class GetSubmittedBasketSummaryResult
    {
        public int TransactionReference { get; set; }
        public Guid BasketId { get; set; }
        public DeliveryInformation DeliveryInformation { get; set; }
        public List<BasketItem> BasketItems { get; set; }
        public string BookingReference { get; set; }
        public DiscountInformation DiscountInformation { get; set; }
    }
}
