package LTD_API;

import java.util.Date;
import java.util.List;

public class EventInfo
{
    private int eventId;
    private int eventType;
    private String name;
    private String description;
    private int venueId;
    private String runningTime;
    private String minimumAge;
    private String importantNotice;
    private String mainImageUrl;
    private String smallImageUrl;
    private String specialGraphics;
    private String shortOfferText;
    private String longOfferText;
    private decimal currentPrice;
    private decimal offerPrice;
    private Date? startDate;
    private Date? endDate;
    private decimal eventMinimumPrice;
    private List<Image> images;
    private List<EventMultimediaContent> multimediaContent;
    private String eventDetailUrl;
    private String tagLine;
    private boolean printAtHomeTicketsEnabled;
    
    public int getEventId()
    {
        return eventId;
    }
    public void setEventId(int eventId)
    {
        this.eventId = eventId;
    }

    public int getEventType()
    {
        return eventType;
    }
    public void setEventType(int eventType)
    {
        this.eventType = eventType;
    }

    public String getName()
    {
        return name;
    }
    public void setName(String name)
    {
        this.name = name;
    }

    public String getDescription()
    {
        return description;
    }
    public void setDescription(String description)
    {
        this.description = description;
    }

    public int getVenueId()
    {
        return venueId;
    }
    public void setVenueId(int venueId)
    {
        this.venueId = venueId;
    }

    public String getRunningTime()
    {
        return runningTime;
    }
    public void setRunningTime(String runningTime)
    {
        this.runningTime = runningTime;
    }

    public String getMinimumAge()
    {
        return minimumAge;
    }
    public void setMinimumAge(String minimumAge)
    {
        this.minimumAge = minimumAge;
    }

    public String getImportantNotice()
    {
        return importantNotice;
    }
    public void setImportantNotice(String importantNotice)
    {
        this.importantNotice = importantNotice;
    }

    public String getMainImageUrl()
    {
        return mainImageUrl;
    }
    public void setMainImageUrl(String mainImageUrl)
    {
        this.mainImageUrl = mainImageUrl;
    }

    public String getSmallImageUrl()
    {
        return smallImageUrl;
    }
    public void setSmallImageUrl(String smallImageUrl)
    {
        this.smallImageUrl = smallImageUrl;
    }

    public String getSpecialGraphics()
    {
        return specialGraphics;
    }
    public void setSpecialGraphics(String specialGraphics)
    {
        this.specialGraphics = specialGraphics;
    }

    public String getShortOfferText()
    {
        return shortOfferText;
    }
    public void setShortOfferText(String shortOfferText)
    {
        this.shortOfferText = shortOfferText;
    }

    public String getLongOfferText()
    {
        return longOfferText;
    }
    public void setLongOfferText(String longOfferText)
    {
        this.longOfferText = longOfferText;
    }

    public decimal getCurrentPrice()
    {
        return currentPrice;
    }
    public void setCurrentPrice(decimal currentPrice)
    {
        this.currentPrice = currentPrice;
    }

    public decimal getOfferPrice()
    {
        return offerPrice;
    }
    public void setOfferPrice(decimal offerPrice)
    {
        this.offerPrice = offerPrice;
    }

    public Date? getStartDate()
    {
        return startDate;
    }
    public void setStartDate(Date? startDate)
    {
        this.startDate = startDate;
    }

    public Date? getEndDate()
    {
        return endDate;
    }
    public void setEndDate(Date? endDate)
    {
        this.endDate = endDate;
    }

    public decimal getEventMinimumPrice()
    {
        return eventMinimumPrice;
    }
    public void setEventMinimumPrice(decimal eventMinimumPrice)
    {
        this.eventMinimumPrice = eventMinimumPrice;
    }

    public List<Image> getImages()
    {
        return images;
    }
    public void setImages(List<Image> images)
    {
        this.images = images;
    }

    public List<EventMultimediaContent> getMultimediaContent()
    {
        return multimediaContent;
    }
    public void setMultimediaContent(List<EventMultimediaContent> multimediaContent)
    {
        this.multimediaContent = multimediaContent;
    }

    public String getEventDetailUrl()
    {
        return eventDetailUrl;
    }
    public void setEventDetailUrl(String eventDetailUrl)
    {
        this.eventDetailUrl = eventDetailUrl;
    }

    public String getTagLine()
    {
        return tagLine;
    }
    public void setTagLine(String tagLine)
    {
        this.tagLine = tagLine;
    }

    public boolean getPrintAtHomeTicketsEnabled()
    {
        return printAtHomeTicketsEnabled;
    }
    public void setPrintAtHomeTicketsEnabled(boolean printAtHomeTicketsEnabled)
    {
        this.printAtHomeTicketsEnabled = printAtHomeTicketsEnabled;
    }
}


