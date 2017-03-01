namespace LTD_API
{
    public class DeliveryInformation
    {
        public DeliveryTypeEnum DeliveryType { get; set; }
        public decimal DeliveryPrice { get; set; }
        public string CustomerEmail { get; set; }
        public string BillingFirstName { get; set; }
        public string BillingSurname { get; set; }
        public string BillingAddressLine1 { get; set; }
        public string BillingAddressLine2 { get; set; }
        public string BillingPostCode { get; set; }
        public string BillingPhoneNumber { get; set; }
        public string BillingCity { get; set; }
        public string BillingStateCode { get; set; }
        public string BillingCountry { get; set; }
        public string BillingCountryName { get; set; }
        public string DeliveryFirstName { get; set; }
        public string DeliverySurname { get; set; }
        public string DeliveryAddressLine1 { get; set; }
        public string DeliveryAddressLine2 { get; set; }
        public string DeliveryPostCode { get; set; }
        public string DeliveryPhoneNumber { get; set; }
        public string DeliveryCity { get; set; }
        public string DeliveryStateCode { get; set; }
        public string DeliveryCountry { get; set; }
        public string DeliveryCountryName { get; set; }
        public bool DeliveryAddressSame { get; set; }
    }
}
