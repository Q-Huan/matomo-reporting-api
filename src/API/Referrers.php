<?php

namespace Matomo\ReportingApi\API;

/**
  The Referrers API lets you access reports about Websites, Search engines, Keywords, Campaigns used to access your website.  For example, "getKeywords" returns all search engine keywords (with <a href='http://matomo.org/docs/analytics-api/reference/#toc-metric-definitions' rel='noreferrer' target='_blank'>general analytics metrics</a> for each keyword), "getWebsites" returns referrer websites (along with the full Referrer URL if the parameter &expanded=1 is set). "getReferrerType" returns the Referrer overview report. "getCampaigns" returns the list of all campaigns (and all campaign keywords if the parameter &expanded=1 is set).   
*/
final class Referrers
{
        
    public function get($idSite, $period, $date, $segment = false, $columns = false){
        //
    }
    /**
     * Returns a report describing visit information for each possible referrer type. The
     * result is a datatable whose subtables are the reports for each parent row's referrer type.
     *
     * The subtable reports are: 'getKeywords' (for search engine referrer type), 'getWebsites',
     * and 'getCampaigns'.
     *
     * @param string $idSite The site ID.
     * @param string $period The period to get data for, either 'day', 'week', 'month', 'year',
     *                       or 'range'.
     * @param string $date The date of the period.
     * @param bool|string $segment The segment to use.
     * @param bool|int $typeReferrer (deprecated) If you want to get data only for a specific referrer
     *                         type, supply a type for this parameter.
     * @param bool|int $idSubtable For this report this value is a referrer type ID and not an actual
     *                        subtable ID. The result when using this parameter will be the
     *                        specific report for the given referrer type.
     * @param bool $expanded Whether to get report w/ subtables loaded or not.
     * @return DataTable
     */
    public function getReferrerType($idSite, $period, $date, $segment = false, $typeReferrer = false, $idSubtable = false, $expanded = false, $_setReferrerTypeLabel = true){
        //
    }
    /**
     * Returns a report that shows
     */
    public function getAll($idSite, $period, $date, $segment = false){
        //
    }
    
    public function getKeywords($idSite, $period, $date, $segment = false, $expanded = false, $flat = false){
        //
    }
    
    public function getSearchEnginesFromKeywordId($idSite, $period, $date, $idSubtable, $segment = false){
        //
    }
    
    public function getSearchEngines($idSite, $period, $date, $segment = false, $expanded = false, $flat = false){
        //
    }
    
    public function getKeywordsFromSearchEngineId($idSite, $period, $date, $idSubtable, $segment = false){
        //
    }
    
    public function getCampaigns($idSite, $period, $date, $segment = false, $expanded = false){
        //
    }
    
    public function getKeywordsFromCampaignId($idSite, $period, $date, $idSubtable, $segment = false){
        //
    }
    
    public function getWebsites($idSite, $period, $date, $segment = false, $expanded = false, $flat = false){
        //
    }
    
    public function getUrlsFromWebsiteId($idSite, $period, $date, $idSubtable, $segment = false){
        //
    }
    /**
     * Returns report comparing the number of visits (and other info) for social network referrers.
     * This is a view of the getWebsites report.
     *
     * @param string $idSite
     * @param string $period
     * @param string $date
     * @param string|bool $segment
     * @param bool $expanded
     * @param bool $flat
     * @return DataTable
     */
    public function getSocials($idSite, $period, $date, $segment = false, $expanded = false, $flat = false){
        //
    }
    /**
     * Returns report containing individual referrer URLs for a specific social networking
     * site.
     *
     * @param string $idSite
     * @param string $period
     * @param string $date
     * @param bool|string $segment
     * @param bool|int $idSubtable This ID does not reference a real DataTable record. Instead, it
     *                              is the array index of an item in the Socials list file.
     *                              The urls are filtered by the social network at this index.
     *                              If false, no filtering is done and every social URL is returned.
     * @return DataTable
     */
    public function getUrlsForSocial($idSite, $period, $date, $segment = false, $idSubtable = false){
        //
    }
    
    public function getNumberOfDistinctSearchEngines($idSite, $period, $date, $segment = false){
        //
    }
    
    public function getNumberOfDistinctSocialNetworks($idSite, $period, $date, $segment = false){
        //
    }
    
    public function getNumberOfDistinctKeywords($idSite, $period, $date, $segment = false){
        //
    }
    
    public function getNumberOfDistinctCampaigns($idSite, $period, $date, $segment = false){
        //
    }
    
    public function getNumberOfDistinctWebsites($idSite, $period, $date, $segment = false){
        //
    }
    
    public function getNumberOfDistinctWebsitesUrls($idSite, $period, $date, $segment = false){
        //
    }
}