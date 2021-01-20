<?php

namespace Matomo\ReportingApi\API;

/**
   
*/
final class Transitions
{
        
    public function getTransitionsForPageTitle($pageTitle, $idSite, $period, $date, $segment = false, $limitBeforeGrouping = false){
        //
    }
    
    public function getTransitionsForPageUrl($pageUrl, $idSite, $period, $date, $segment = false, $limitBeforeGrouping = false){
        //
    }
    /**
     * General method to get transitions for an action
     *
     * @param $actionName
     * @param $actionType "url"|"title"
     * @param $idSite
     * @param $period
     * @param $date
     * @param bool $segment
     * @param bool $limitBeforeGrouping
     * @param string $parts
     * @return array
     * @throws Exception
     */
    public function getTransitionsForAction($actionName, $actionType, $idSite, $period, $date, $segment = false, $limitBeforeGrouping = false, $parts = 'all'){
        //
    }
    
    public function getTranslations(){
        //
    }
}