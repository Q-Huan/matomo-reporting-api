<?php

namespace Matomo\ReportingApi\API;

/**
  VisitorInterest API lets you access two Visitor Engagement reports: number of visits per number of pages, and number of visits per visit duration.   
*/
final class VisitorInterest
{
        
    public function getNumberOfVisitsPerVisitDuration($idSite, $period, $date, $segment = false){
        //
    }
    
    public function getNumberOfVisitsPerPage($idSite, $period, $date, $segment = false){
        //
    }
    /**
     * Returns a DataTable that associates counts of days (N) with the count of visits that
     * occurred within N days of the last visit.
     *
     * @param int $idSite The site to select data from.
     * @param string $period The period type.
     * @param string $date The date type.
     * @param string|bool $segment The segment.
     * @return DataTable the archived report data.
     */
    public function getNumberOfVisitsByDaysSinceLast($idSite, $period, $date, $segment = false){
        //
    }
    /**
     * Returns a DataTable that associates ranges of visit numbers with the count of visits
     * whose visit number falls within those ranges.
     *
     * @param int $idSite The site to select data from.
     * @param string $period The period type.
     * @param string $date The date type.
     * @param string|bool $segment The segment.
     * @return DataTable the archived report data.
     */
    public function getNumberOfVisitsByVisitCount($idSite, $period, $date, $segment = false){
        //
    }
}