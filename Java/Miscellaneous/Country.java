package LTD_API;

public class Country
{
    private int countryId;
    private String countryName;
    private int ordering;
    private String iso3166;
    
    public int getCountryId()
    {
        return countryId;
    }
    public void setCountryId(int countryId)
    {
        this.countryId = countryId;
    }

    public String getCountryName()
    {
        return countryName;
    }
    public void setCountryName(String countryName)
    {
        this.countryName = countryName;
    }

    public int getOrdering()
    {
        return ordering;
    }
    public void setOrdering(int ordering)
    {
        this.ordering = ordering;
    }

    public String getISO3166()
    {
        return iso3166;
    }
    public void setISO3166(String iso3166)
    {
        this.iso3166 = iso3166;
    }
}

