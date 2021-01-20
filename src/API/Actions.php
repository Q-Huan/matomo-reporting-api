<?php

namespace Matomo\ReportingApi\API;

/**
  The Actions API lets you request reports for all your Visitor Actions: Page URLs, Page titles, Events, Content Tracking, File Downloads and Clicks on external websites.  For example, "getPageTitles" will return all your page titles along with standard <a href='http://matomo.org/docs/analytics-api/reference/#toc-metric-definitions' rel='noreferrer' target='_blank'>Actions metrics</a> for each row.  It is also possible to request data for a specific Page Title with "getPageTitle" and setting the parameter pageName to the page title you wish to request. Similarly, you can request metrics for a given Page URL via "getPageUrl", a Download file via "getDownload" and an outlink via "getOutlink".  Note: pageName, pageUrl, outlinkUrl, downloadUrl parameters must be URL encoded before you call the API.
*/
final class Actions
{
        /**
     * Returns the list of metrics (pages, downloads, outlinks)
     *
     * @param int $idSite
     * @param string $period
     * @param string $date
     * @param bool|string $segment
     * @param bool|array $columns
     * @return DataTable
     */
    public function get($idSite, $period, $date, $segment = false, $columns = false){
        //
    }
    /**
     * @param int $idSite
     * @param string $period
     * @param Date $date
     * @param bool $segment
     * @param bool $expanded
     * @param bool|int $idSubtable
     * @param bool|int $depth
     * @param bool|int $flat
     *
     * @return DataTable|DataTable\Map
     */
    public function getPageUrls($idSite, $period, $date, $segment = false, $expanded = false, $idSubtable = false, $depth = false, $flat = false){
        //
    }
    /**
     * @param int $idSite
     * @param string $period
     * @param Date $date
     * @param bool $segment
     * @param bool $expanded
     * @param bool $idSubtable
     *
     * @return DataTable|DataTable\Map
     */
    public function getPageUrlsFollowingSiteSearch($idSite, $period, $date, $segment = false, $expanded = false, $idSubtable = false){
        //
    }
    /**
     * @param int $idSite
     * @param string $period
     * @param Date $date
     * @param bool $segment
     * @param bool $expanded
     * @param bool $idSubtable
     *
     * @return DataTable|DataTable\Map
     */
    public function getPageTitlesFollowingSiteSearch($idSite, $period, $date, $segment = false, $expanded = false, $idSubtable = false){
        //
    }
    /**
     * Returns a DataTable with analytics information for every unique entry page URL, for
     * the specified site, period & segment.
     */
    public function getEntryPageUrls($idSite, $period, $date, $segment = false, $expanded = false, $idSubtable = false, $flat = false){
        //
    }
    /**
     * Returns a DataTable with analytics information for every unique exit page URL, for
     * the specified site, period & segment.
     */
    public function getExitPageUrls($idSite, $period, $date, $segment = false, $expanded = false, $idSubtable = false, $flat = false){
        //
    }

    public function getPageUrl($pageUrl, $idSite, $period, $date, $segment = false){
        //
    }

    public function getPageTitles($idSite, $period, $date, $segment = false, $expanded = false, $idSubtable = false, $flat = false){
        //
    }
    /**
     * Returns a DataTable with analytics information for every unique entry page title
     * for the given site, time period & segment.
     */
    public function getEntryPageTitles($idSite, $period, $date, $segment = false, $expanded = false, $idSubtable = false, $flat = false){
        //
    }
    /**
     * Returns a DataTable with analytics information for every unique exit page title
     * for the given site, time period & segment.
     */
    public function getExitPageTitles($idSite, $period, $date, $segment = false, $expanded = false, $idSubtable = false, $flat = false){
        //
    }

    public function getPageTitle($pageName, $idSite, $period, $date, $segment = false){
        //
    }

    public function getDownloads($idSite, $period, $date, $segment = false, $expanded = false, $idSubtable = false, $flat = false){
        //
    }

    public function getDownload($downloadUrl, $idSite, $period, $date, $segment = false){
        //
    }

    public function getOutlinks($idSite, $period, $date, $segment = false, $expanded = false, $idSubtable = false, $flat = false){
        //
    }

    public function getOutlink($outlinkUrl, $idSite, $period, $date, $segment = false){
        //
    }

    public function getSiteSearchKeywords($idSite, $period, $date, $segment = false){
        //
    }

    public function getSiteSearchNoResultKeywords($idSite, $period, $date, $segment = false){
        //
    }
    /**
     * @param int $idSite
     * @param string $period
     * @param Date $date
     * @param bool $segment
     *
     * @return DataTable|DataTable\Map
     */
    public function getSiteSearchCategories($idSite, $period, $date, $segment = false){
        //
    }
}
