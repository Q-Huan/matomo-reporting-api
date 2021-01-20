<?php

namespace Matomo\ReportingApi\API;

/**
  VisitTime API lets you access reports by Hour (Server time), and by Hour Local Time of your visitors.   
*/
final class VisitTime
{
        
    public function getVisitInformationPerLocalTime($idSite, $period, $date, $segment = false){
        //
    }
    
    public function getVisitInformationPerServerTime($idSite, $period, $date, $segment = false, $hideFutureHoursWhenToday = false){
        //
    }
    /**
     * Returns datatable describing the number of visits for each day of the week.
     *
     * @param string $idSite The site ID. Cannot refer to multiple sites.
     * @param string $period The period type: day, week, year, range...
     * @param string $date The start date of the period. Cannot refer to multiple dates.
     * @param bool|string $segment The segment.
     * @throws Exception
     * @return DataTable
     */
    public function getByDayOfWeek($idSite, $period, $date, $segment = false){
        //
    }
}