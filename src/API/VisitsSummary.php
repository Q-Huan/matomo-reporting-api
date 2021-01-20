<?php

namespace Matomo\ReportingApi\API;

/**
  VisitsSummary API lets you access the core web analytics metrics (visits, unique visitors, count of actions (page views & downloads & clicks on outlinks), time on site, bounces and converted visits.   
*/
final class VisitsSummary
{
        
    public function get($idSite, $period, $date, $segment = false, $columns = false){
        //
    }
    
    public function getVisits($idSite, $period, $date, $segment = false){
        //
    }
    
    public function getUniqueVisitors($idSite, $period, $date, $segment = false){
        //
    }
    
    public function getUsers($idSite, $period, $date, $segment = false){
        //
    }
    
    public function getActions($idSite, $period, $date, $segment = false){
        //
    }
    
    public function getMaxActions($idSite, $period, $date, $segment = false){
        //
    }
    
    public function getBounceCount($idSite, $period, $date, $segment = false){
        //
    }
    
    public function getVisitsConverted($idSite, $period, $date, $segment = false){
        //
    }
    
    public function getSumVisitsLength($idSite, $period, $date, $segment = false){
        //
    }
    
    public function getSumVisitsLengthPretty($idSite, $period, $date, $segment = false){
        //
    }
}