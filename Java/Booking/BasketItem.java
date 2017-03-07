package LTD_API;

import java.util.Date;
import java.util.List;

public class BasketItem
{
	private int basketItemId;
	private int eventId;
	private String eventName;
	private String imageUrl;
	private Date performanceDate;
	private String areaName;
	private List<String> seats;
	private List<TicketInfoBooking> tickets;
	private int venueId;
	private String venueName;
	private String venueAddress;
	private String venueCity;
	private String venuePostCode;
	private decimal priceSubTotal;
	private int reservationValidity;
	private Date expirationDate;
	
	public int getBasketItemId()
    {
        return basketItemId;
    }
    public void setBasketItemId(int basketItemId)
    {
        this.basketItemId = basketItemId;
    }	
	
	public int getEventId()
    {
        return eventId;
    }
    public void setEventId(int eventId)
    {
        this.eventId = eventId;
    }
	
	public String getEventName()
    {
        return eventName;
    }
    public void setEventName(String eventName)
    {
        this.eventName = eventName;
    }
	
	public String getImageUrl()
    {
        return imageUrl;
    }
    public void setImageUrl(String imageUrl)
    {
        this.imageUrl = imageUrl;
    }	
	
	public Date getPerformanceDate()
    {
        return performanceDate;
    }
    public void setPerformanceDate(Date performanceDate)
    {
        this.performanceDate = performanceDate;
    }
	
	public String getAreaName()
    {
        return areaName;
    }
    public void setAreaName(String areaName)
    {
        this.areaName = areaName;
    }
	
	public List<String> getSeats()
    {
        return seats;
    }
    public void setSeats(List<String> seats)
    {
        this.seats = seats;
    }
	
	public List<TicketInfoBooking> getTickets()
    {
        return tickets;
    }
    public void setTickets(List<TicketInfoBooking> tickets)
    {
        this.tickets = tickets;
    }
	
	public int getVenueId()
    {
        return venueId;
    }
    public void setVenueId(int venueId)
    {
        this.venueId = venueId;
    }
	
	public String getVenueName()
    {
        return venueName;
    }
    public void setVenueName(String venueName)
    {
        this.venueName = venueName;
    }
	
	public String getVenueAddress()
    {
        return venueAddress;
    }
    public void setVenueAddress(String venueAddress)
    {
        this.venueAddress = venueAddress;
    }
	
	public String getVenueCity()
    {
        return venueCity;
    }
    public void setVenueCity(String venueCity)
    {
        this.venueCity = venueCity;
    }
	
	public String getVenuePostCode()
    {
        return venuePostCode;
    }
    public void setVenuePostCode(String venuePostCode)
    {
        this.venuePostCode = venuePostCode;
    }
	
	public decimal getPriceSubTotal()
    {
        return priceSubTotal;
    }
    public void setPriceSubTotal(decimal priceSubTotal)
    {
        this.priceSubTotal = priceSubTotal;
    }
	
	public int getReservationValidity()
    {
        return reservationValidity;
    }
    public void setReservationValidity(int reservationValidity)
    {
        this.reservationValidity = reservationValidity;
    }
	
	public Date getExpirationDate()
    {
        return expirationDate;
    }
    public void setExpirationDate(Date expirationDate)
    {
        this.expirationDate = expirationDate;
    }
}

