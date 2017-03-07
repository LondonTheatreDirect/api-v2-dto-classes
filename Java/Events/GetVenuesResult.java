package LTD_API;

import java.util.List;

public class GetVenuesResult
{
    private List<VenueInfo> venues;
    
    public List<VenueInfo> getVenues()
    {
        return venues;
    }
    public void setVenues(List<VenueInfo> venues)
    {
        this.venues = venues;
    }
}

