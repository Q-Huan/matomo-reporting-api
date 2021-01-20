<?php

namespace Matomo\ReportingApi\API;

/**
  API for plugin PrivacyManager   
*/
final class PrivacyManager
{
        
    public function deleteDataSubjects($visits){
        //
    }
    
    public function exportDataSubjects($visits){
        //
    }
    
    public function findDataSubjects($idSite, $segment){
        //
    }
    
    public function anonymizeSomeRawData($idSites, $date, $anonymizeIp = false, $anonymizeLocation = false, $anonymizeUserId = false, $unsetVisitColumns = [], $unsetLinkVisitActionColumns = []){
        //
    }
    
    public function getAvailableVisitColumnsToAnonymize(){
        //
    }
    
    public function getAvailableLinkVisitActionColumnsToAnonymize(){
        //
    }
    /**
     * @internal
     */
    public function setAnonymizeIpSettings($anonymizeIPEnable, $maskLength, $useAnonymizedIpForVisitEnrichment, $anonymizeUserId = false, $anonymizeOrderId = false, $anonymizeReferrer = '', $forceCookielessTracking = false){
        //
    }
    /**
     * @internal
     */
    public function deactivateDoNotTrack(){
        //
    }
    /**
     * @internal
     */
    public function activateDoNotTrack(){
        //
    }
    /**
     * @internal
     */
    public function setScheduleReportDeletionSettings($deleteLowestInterval = 7){
        //
    }
    /**
     * @internal
     */
    public function setDeleteLogsSettings($enableDeleteLogs = 0, $deleteLogsOlderThan = 180){
        //
    }
    /**
     * @internal
     */
    public function setDeleteReportsSettings($enableDeleteReports = 0, $deleteReportsOlderThan = 3, $keepBasic = 0, $keepDay = 0, $keepWeek = 0, $keepMonth = 0, $keepYear = 0, $keepRange = 0, $keepSegments = 0){
        //
    }
}