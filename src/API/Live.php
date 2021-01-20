<?php

namespace Matomo\ReportingApi\API;

/**
  The Live! API lets you access complete visit level information about your visitors. Combined with the power of <a href='http://matomo.org/docs/analytics-api/segmentation/' target='_blank'>Segmentation</a>, you will be able to request visits filtered by any criteria.  The method "getLastVisitsDetails" will return extensive data for each visit, which includes: server time, visitId, visitorId, visitorType (new or returning), number of pages, list of all pages (and events, file downloaded and outlinks clicked), custom variables names and values set to this visit, number of goal conversions (and list of all Goal conversions for this visit, with time of conversion, revenue, URL, etc.), but also other attributes such as: days since last visit, days since first visit, country, continent, visitor IP, provider, referrer used (referrer name, keyword if it was a search engine, full URL), campaign name and keyword, operating system, browser, type of screen, resolution, supported browser plugins (flash, java, silverlight, pdf, etc.), various dates & times format to make it easier for API users... and more!  With the parameter <a href='http://matomo.org/docs/analytics-api/segmentation/' rel='noreferrer' target='_blank'>'&segment='</a> you can filter the returned visits by any criteria (visitor IP, visitor ID, country, keyword used, time of day, etc.).  The method "getCounters" is used to return a simple counter: visits, number of actions, number of converted visits, in the last N minutes.  See also the documentation about <a href='http://matomo.org/docs/real-time/' rel='noreferrer' target='_blank'>Real time widget and visitor level reports</a> in Matomo.   
*/
final class Live
{
        /**
     * This will return simple counters, for a given website ID, for visits over the last N minutes
     *
     * @param int $idSite Id Site
     * @param int $lastMinutes Number of minutes to look back at
     * @param bool|string $segment
     * @param array $showColumns The columns to show / not to request. Eg 'visits', 'actions', ...
     * @param array $hideColumns The columns to hide / not to request. Eg 'visits', 'actions', ...
     * @return array( visits => N, actions => M, visitsConverted => P )
     */
    public function getCounters($idSite, $lastMinutes, $segment = false, $showColumns = [], $hideColumns = []){
        //
    }
    /**
     * Returns the last visits tracked in the specified website
     * You can define any number of filters: none, one, many or all parameters can be defined
     *
     * @param int $idSite Site ID
     * @param bool|string $period Period to restrict to when looking at the logs
     * @param bool|string $date Date to restrict to
     * @param bool|int $segment (optional) Number of visits rows to return
     * @param bool|int $countVisitorsToFetch DEPRECATED (optional) Only return the last X visits. Please use the API paramaeter 'filter_offset' and 'filter_limit' instead.
     * @param bool|int $minTimestamp (optional) Minimum timestamp to restrict the query to (useful when paginating or refreshing visits)
     * @param bool $flat
     * @param bool $doNotFetchActions
     * @param bool $enhanced for plugins that want to expose additional information
     * @return DataTable
     */
    public function getLastVisitsDetails($idSite, $period = false, $date = false, $segment = false, $countVisitorsToFetch = false, $minTimestamp = false, $flat = false, $doNotFetchActions = false, $enhanced = false){
        //
    }
    /**
     * Returns an array describing a visitor using their last visits (uses a maximum of 100).
     *
     * @param int $idSite Site ID
     * @param bool|false|string $visitorId The ID of the visitor whose profile to retrieve.
     * @param bool|false|string $segment
     * @param bool|false|int $limitVisits
     * @return array
     */
    public function getVisitorProfile($idSite, $visitorId = false, $segment = false, $limitVisits = false){
        //
    }
    /**
     * Returns the visitor ID of the most recent visit.
     *
     * @param int $idSite
     * @param bool|string $segment
     * @return string
     */
    public function getMostRecentVisitorId($idSite, $segment = false){
        //
    }
    /**
     * Returns the very first visit for the given visitorId
     *
     * @internal
     *
     * @param $idSite
     * @param $visitorId
     *
     * @return DataTable
     */
    public function getFirstVisitForVisitorId($idSite, $visitorId){
        //
    }
}