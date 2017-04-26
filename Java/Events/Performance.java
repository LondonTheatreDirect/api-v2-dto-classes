package LTD_API;

import java.util.Date;

public class Performance
{
    private int performanceId;
    private Date performanceDate;
    private boolean isUnreserved;
    
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

    public boolean getIsUnreserved()
    {
        return isUnreserved;
    }
    public void setIsUnreserved(boolean isUnreserved)
    {
        this.isUnreserved = isUnreserved;
    }
}

