<?php

namespace Matomo\ReportingApi\API;

/**
  The MultiSites API lets you request the key metrics (visits, page views, revenue) for all Websites in Matomo.   
*/
final class MultiSites
{
        /**
     * Returns a report displaying the total visits, actions and revenue, as
     * well as the evolution of these values, of all existing sites over a
     * specified period of time.
     *
     * If the specified period is not a 'range', this function will calculate
     * evolution metrics. Evolution metrics are metrics that display the
     * percent increase/decrease of another metric since the last period.
     *
     * This function will merge the result of the archive query so each
     * row in the result DataTable will correspond to the metrics of a single
     * site. If a date range is specified, the result will be a
     * DataTable\Map, but it will still be merged.
     *
     * @param string $period The period type to get data for.
     * @param string $date The date(s) to get data for.
     * @param bool|string $segment The segments to get data for.
     * @param bool|string $_restrictSitesToLogin Hack used to enforce we restrict the returned data to the specified username
     *                                        Only used when a scheduled task is running
     * @param bool|string $enhanced When true, return additional goal & ecommerce metrics
     * @param bool|string $pattern If specified, only the website which names (or site ID) match the pattern will be returned using SitesManager.getPatternMatchSites
     * @param array $showColumns If specified, only the requested columns will be fetched
     * @return DataTable
     */
    public function getAll($period, $date, $segment = false, $_restrictSitesToLogin = false, $enhanced = false, $pattern = false, $showColumns = []){
        //
    }
    /**
     * Same as getAll but for a unique Matomo site
     * @see \Piwik\Plugins\MultiSites\API::getAll()
     *
     * @param int $idSite Id of the Matomo site
     * @param string $period The period type to get data for.
     * @param string $date The date(s) to get data for.
     * @param bool|string $segment The segments to get data for.
     * @param bool|string $_restrictSitesToLogin Hack used to enforce we restrict the returned data to the specified username
     *                                        Only used when a scheduled task is running
     * @param bool|string $enhanced When true, return additional goal & ecommerce metrics
     * @return DataTable
     */
    public function getOne($idSite, $period, $date, $segment = false, $_restrictSitesToLogin = false, $enhanced = false){
        //
    }
}