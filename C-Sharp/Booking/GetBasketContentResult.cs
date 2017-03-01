using System;
using System.Collections.Generic;

namespace LTD_API
{
    public class GetBasketContentResult
    {
        public Guid BasketId { get; set; }
        public DateTime MinExpirationDate { get; set; }
        public DeliveryInformation DeliveryInformation { get; set; }
        public List<BasketItem> Items { get; set; }
        public DiscountInformation DiscountInformation { get; set; }
    }
}
