package LTD_API;

import java.util.Date;

public class Review
{
    private String consumerName;
    private int stars;
    private Date createdAt;
    private String content;
    
    public String getConsumerName()
    {
        return consumerName;
    }
    public void setConsumerName(String consumerName)
    {
        this.consumerName = consumerName;
    }

    public int getStars()
    {
        return stars;
    }
    public void setStars(int stars)
    {
        this.stars = stars;
    }

    public Date getCreatedAt()
    {
        return createdAt;
    }
    public void setCreatedAt(Date createdAt)
    {
        this.createdAt = createdAt;
    }

    public String getContent()
    {
        return content;
    }
    public void setContent(String content)
    {
        this.content = content;
    }
}

