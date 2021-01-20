<?php

namespace Matomo\ReportingApi\API;

/**
  API for plugin Insights   
*/
final class Insights
{
        /**
     * Detects whether insights can be generated for this date/period combination or not.
     * @param string $date     eg 'today', '2012-12-12'
     * @param string $period   eg 'day' or 'week'
     *
     * @return bool
     */
    public function canGenerateInsights($date, $period){
        //
    }
    /**
     * Generates insights for a set of reports. Plugins can add their own reports to be included in the insights
     * overview by listening to the {@hook Insights.addReportToOverview} event.
     *
     * @param int $idSite
     * @param string $period
     * @param string $date
     * @param bool|string $segment
     *
     * @return DataTable\Map   A map containing a dataTable for each insight report. See {@link getInsights()} for more
     *                         information
     */
    public function getInsightsOverview($idSite, $period, $date, $segment = false){
        //
    }
    /**
     * Detects the movers and shakers for a set of reports. Plugins can add their own reports to be included in this
     * overview by listening to the {@hook Insights.addReportToOverview} event.
     *
     * @param int $idSite
     * @param string $period
     * @param string $date
     * @param bool|string $segment
     *
     * @return DataTable\Map   A map containing a dataTable for each movers and shakers report. See
     *                         {@link getMoversAndShakers()} for more information
     */
    public function getMoversAndShakersOverview($idSite, $period, $date, $segment = false){
        //
    }
    /**
     * Detects the movers and shakers of a given date / report combination. A mover and shakers has an higher impact
     * than other rows on average. For instance if a sites pageviews increase by 10% a page that increased by 40% at the
     * same time contributed significantly more to the success than the average of 10%.
     *
     * @param int $idSite
     * @param string $period
     * @param string $date
     * @param string $reportUniqueId   eg 'Actions_getPageUrls'. An id like 'Goals_getVisitsUntilConversion_idGoal--4' works as well.
     * @param bool|string $segment
     * @param int $comparedToXPeriods
     * @param int $limitIncreaser      Value '0' ignores all increasers
     * @param int $limitDecreaser      Value '0' ignores all decreasers
     *
     * @return DataTable
     *
     * @throws \Exception In case a report having the given ID does not exist
     * @throws \Exception In case the report exists but does not return a dataTable
     */
    public function getMoversAndShakers($idSite, $period, $date, $reportUniqueId, $segment = false, $comparedToXPeriods = 1, $limitIncreaser = 4, $limitDecreaser = 4){
        //
    }
    /**
     * Generates insights by comparing the report for a given date/period with a different date and calculating the
     * difference. The API can exclude rows which growth is not good enough or did not have enough impact.
     *
     * @param int $idSite
     * @param string $period
     * @param string $date
     * @param string $reportUniqueId   eg 'Actions_getPageUrls'. An id like 'Goals_getVisitsUntilConversion_idGoal--4' works as well.
     * @param bool|string $segment
     * @param int $limitIncreaser      Value '0' ignores all increasers
     * @param int $limitDecreaser      Value '0' ignores all decreasers
     * @param string $filterBy         By default all rows will be ignored. If given only 'movers', 'new' or 'disappeared' will be returned.
     * @param int $minImpactPercent    The minimum impact in percent. Eg '2%' of 1000 visits means the change /
     *                                 increase / decrease has to be at least 20 visits. Usually the '2%' are based on the total
     *                                 amount of visits but for reports having way less visits the metric total is used. Eg A page
     *                                 has 1000 visits but only 100 visits having keywords. In this case a minimum impact of '2%' evaluates to 2 and not 20.
     * @param int $minGrowthPercent    The amount of percent a row has to increase or decrease at least compared to the previous period.
     *                                 If value is '20' the growth has to be either at least '+20%' or '-20%' and lower.
     * @param int $comparedToXPeriods  The report will be compared to X periods before.
     * @param string $orderBy          Orders the rows by 'absolute', 'relative' or 'importance'.
     *
     * @return DataTable
     *
     * @throws \Exception In case a report having the given ID does not exist
     * @throws \Exception In case the report exists but does not return a dataTable
     */
    public function getInsights($idSite, $period, $date, $reportUniqueId, $segment = false, $limitIncreaser = 5, $limitDecreaser = 5, $filterBy = '', $minImpactPercent = 2, $minGrowthPercent = 20, $comparedToXPeriods = 1, $orderBy = 'absolute'){
        //
    }
}