package LTD_API;

import java.util.Date;

public class Performance
{
    private int performanceId;
    private Date performanceDate;
    private bool isUnreserved;
    
    public int getPerformanceId()
    {
        return performanceId;
    }
    public void setPerformanceId(int performanceId)
    {
        this.performanceId = performanceId;
    }

    public Date getPerformanceDate()
    {
        return performanceDate;
    }
    public void setPerformanceDate(Date performanceDate)
    {
        this.performanceDate = performanceDate;
    }

    public bool getIsUnreserved()
    {
        return isUnreserved;
    }
    public void setIsUnreserved(bool isUnreserved)
    {
        this.isUnreserved = isUnreserved;
    }
}

