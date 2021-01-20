<?php

namespace Matomo\ReportingApi\API;

/**
  Class API   
*/
final class Overlay
{
        /**
     * Get translation strings
     */
    public function getTranslations($idSite){
        //
    }
    /**
     * Get excluded query parameters for a site.
     * This information is used for client side url normalization.
     */
    public function getExcludedQueryParameters($idSite){
        //
    }
    /**
     * Get following pages of a url.
     * This is done on the logs - not the archives!
     *
     * Note: if you use this method via the regular API, the number of results will be limited.
     * Make sure, you set filter_limit=-1 in the request.
     */
    public function getFollowingPages($url, $idSite, $period, $date, $segment = false){
        //
    }
}