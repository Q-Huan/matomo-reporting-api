<?php

namespace Matomo\ReportingApi\API;

/**
   
*/
final class CoreAdminHome
{
        /**
     * Will run all scheduled tasks due to run at this time.
     *
     * @return array
     * @hideExceptForSuperUser
     */
    public function runScheduledTasks(){
        //
    }
    /**
     * @internal
     */
    public function setArchiveSettings($enableBrowserTriggerArchiving, $todayArchiveTimeToLive){
        //
    }
    /**
     * @internal
     */
    public function setTrustedHosts($trustedHosts){
        //
    }
    /**
     * @internal
     */
    public function setBrandingSettings($useCustomLogo){
        //
    }
    /**
     * Invalidates report data, forcing it to be recomputed during the next archiving run.
     *
     * Note: This is done automatically when tracking or importing visits in the past.
     *
     * @param string $idSites Comma separated list of site IDs to invalidate reports for.
     * @param string|string[] $dates Comma separated list of dates of periods to invalidate reports for or array of strings
     *                               (needed if period = range).
     * @param string|bool $period The type of period to invalidate: either 'day', 'week', 'month', 'year', 'range'.
     *                            The command will automatically cascade up, invalidating reports for parent periods as
     *                            well. So invalidating a day will invalidate the week it's in, the month it's in and the
     *                            year it's in, since those periods will need to be recomputed too.
     * @param string|bool $segment Optional. The segment to invalidate reports for.
     * @param bool $cascadeDown If true, child periods will be invalidated as well. So if it is requested to invalidate
     *                          a month, then all the weeks and days within that month will also be invalidated. But only
     *                          if this parameter is set.
     * @throws Exception
     * @return array
     * @hideExceptForSuperUser
     */
    public function invalidateArchivedReports($idSites, $dates, $period = false, $segment = false, $cascadeDown = false, $_forceInvalidateNonexistant = false){
        //
    }
    /**
     * Initiates cron archiving via web request.
     *
     * @hideExceptForSuperUser
     */
    public function runCronArchiving(){
        //
    }
    /**
     * Deletes all tracking failures this user has at least admin access to.
     * A super user will also delete tracking failures for sites that don't exist.
     */
    public function deleteAllTrackingFailures(){
        //
    }
    /**
     * Deletes a specific tracking failure
     * @param int $idSite
     * @param int $idFailure
     */
    public function deleteTrackingFailure($idSite, $idFailure){
        //
    }
    /**
     * Get all tracking failures. A user retrieves only tracking failures for sites with at least admin access.
     * A super user will also retrieve failed requests for sites that don't exist.
     * @return array
     */
    public function getTrackingFailures(){
        //
    }
    /**
     * @param $idSite
     * @param $period
     * @param $date
     * @param bool $segment
     * @param bool $plugin
     * @param bool $report
     * @return mixed
     * @throws \Piwik\Exception\UnexpectedWebsiteFoundException
     * @internal
     */
    public function archiveReports($idSite, $period, $date, $segment = false, $plugin = false, $report = false){
        //
    }
}