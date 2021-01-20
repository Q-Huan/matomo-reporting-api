<?php

namespace Matomo\ReportingApi\API;

/**
  This API is the <a href='http://matomo.org/docs/analytics-api/metadata/' rel='noreferrer' target='_blank'>Metadata API</a>: it gives information about all other available APIs methods, as well as providing human readable and more complete outputs than normal API methods.  Some of the information that is returned by the Metadata API: <ul> <li>the dynamically generated list of all API methods via "getReportMetadata"</li> <li>the list of metrics that will be returned by each method, along with their human readable name, via "getDefaultMetrics" and "getDefaultProcessedMetrics"</li> <li>the list of segments metadata supported by all functions that have a 'segment' parameter</li> <li>the (truly magic) method "getProcessedReport" will return a human readable version of any other report, and include the processed metrics such as conversion rate, time on site, etc. which are not directly available in other methods.</li> <li>the method "getSuggestedValuesForSegment" returns top suggested values for a particular segment. It uses the Live.getLastVisitsDetails API to fetch the most recently used values, and will return the most often used values first.</li> </ul> The Metadata API is for example used by the Matomo Mobile App to automatically display all Matomo reports, with translated report & columns names and nicely formatted values. More information on the <a href='http://matomo.org/docs/analytics-api/metadata/' rel='noreferrer' target='_blank'>Metadata API documentation page</a>   
*/
final class API
{
        /**
     * Get Matomo version
     * @return string
     */
    public function getMatomoVersion(){
        //
    }
    /**
     * Get PHP version
     * @return array
     */
    public function getPhpVersion(){
        //
    }
    /**
     * Get Matomo version
     * @return string
     * @deprecated Deprecated but we keep it for historical reasons to not break BC
     */
    public function getPiwikVersion(){
        //
    }
    /**
     * Returns the most accurate IP address available for the current user, in
     * IPv4 format. This could be the proxy client's IP address.
     *
     * @return string IP address in presentation format.
     */
    public function getIpFromHeader(){
        //
    }
    /**
     * Returns the section [APISettings] if defined in config.ini.php
     * @return array
     */
    public function getSettings(){
        //
    }
    /**
     * Returns all available measurable types.
     * Marked as deprecated so it won't appear in API page. It won't be a public API for now.
     * @deprecated
     * @return array
     */
    public function getAvailableMeasurableTypes(){
        //
    }
    
    public function getSegmentsMetadata($idSites = [], $_hideImplementationData = true, $_showAllSegments = false){
        //
    }
    /**
     * Loads reports metadata, then return the requested one,
     * matching optional API parameters.
     */
    public function getMetadata($idSite, $apiModule, $apiAction, $apiParameters = [], $language = false, $period = false, $date = false, $hideMetricsDoc = false, $showSubtableReports = false){
        //
    }
    /**
     * Triggers a hook to ask plugins for available Reports.
     * Returns metadata information about each report (category, name, dimension, metrics, etc.)
     *
     * @param string $idSites THIS PARAMETER IS DEPRECATED AND WILL BE REMOVED IN PIWIK 4
     * @param bool|string $period
     * @param bool|Date $date
     * @param bool $hideMetricsDoc
     * @param bool $showSubtableReports
     * @param int $idSite
     * @return array
     */
    public function getReportMetadata($idSites = '', $period = false, $date = false, $hideMetricsDoc = false, $showSubtableReports = false, $idSite = false){
        //
    }
    
    public function getProcessedReport($idSite, $period, $date, $apiModule, $apiAction, $segment = false, $apiParameters = false, $idGoal = false, $language = false, $showTimer = true, $hideMetricsDoc = false, $idSubtable = false, $showRawMetrics = false, $format_metrics = null, $idDimension = false){
        //
    }
    /**
     * Get a list of all pages that shall be shown in a Matomo UI including a list of all widgets that shall
     * be shown within each page.
     *
     * @param int $idSite
     * @return array
     */
    public function getReportPagesMetadata($idSite){
        //
    }
    /**
     * Get a list of all widgetizable widgets.
     *
     * @param int $idSite
     * @return array
     */
    public function getWidgetMetadata($idSite){
        //
    }
    /**
     * Get a combined report of the *.get API methods.
     */
    public function get($idSite, $period, $date, $segment = false, $columns = false){
        //
    }
    /**
     * Given an API report to query (eg. "Referrers.getKeywords", and a Label (eg. "free%20software"),
     * this function will query the API for the previous days/weeks/etc. and will return
     * a ready to use data structure containing the metrics for the requested Label, along with enriched information (min/max values, etc.)
     *
     * @param int $idSite
     * @param string $period
     * @param Date $date
     * @param string $apiModule
     * @param string $apiAction
     * @param bool|string $label
     * @param bool|string $segment
     * @param bool|string $column
     * @param bool|string $language
     * @param bool|int $idGoal
     * @param bool|string $legendAppendMetric
     * @param bool|string $labelUseAbsoluteUrl
     * @param bool|int $idDimension
     * @return array
     */
    public function getRowEvolution($idSite, $period, $date, $apiModule, $apiAction, $label = false, $segment = false, $column = false, $language = false, $idGoal = false, $legendAppendMetric = true, $labelUseAbsoluteUrl = true, $idDimension = false, $labelSeries = false){
        //
    }
    /**
     * Performs multiple API requests at once and returns every result.
     *
     * @param array $urls The array of API requests.
     * @return array
     */
    public function getBulkRequest($urls){
        //
    }
    /**
     * Return true if plugin is activated, false otherwise
     *
     * @param string $pluginName
     * @return bool
     */
    public function isPluginActivated($pluginName){
        //
    }
    /**
     * Given a segment, will return a list of the most used values for this particular segment.
     * @param $segmentName
     * @param $idSite
     * @throws \Exception
     * @return array
     */
    public function getSuggestedValuesForSegment($segmentName, $idSite){
        //
    }
    /**
     * Returns category/subcategory pairs as "CategoryId.SubcategoryId" for whom comparison features should
     * be disabled.
     *
     * @return string[]
     */
    public function getPagesComparisonsDisabledFor(){
        //
    }
    /**
     * A glossary of all reports and their definition
     *
     * @param $idSite
     * @return array
     */
    public function getGlossaryReports($idSite){
        //
    }
    /**
     * A glossary of all metrics and their definition
     *
     * @param $idSite
     * @return array
     */
    public function getGlossaryMetrics($idSite){
        //
    }
}