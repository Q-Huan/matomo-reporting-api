<?php

namespace Matomo\ReportingApi\API;

/**
  The ScheduledReports API lets you manage Scheduled Email reports, as well as generate, download or email any existing report.  "generateReport" will generate the requested report (for a specific date range, website and in the requested language). "sendEmailReport" will send the report by email to the recipients specified for this report.  You can also get the list of all existing reports via "getReports", create new reports via "addReport", or manage existing reports with "updateReport" and "deleteReport". See also the documentation about <a href='http://matomo.org/docs/email-reports/' rel='noreferrer' target='_blank'>Scheduled Email reports</a> in Matomo.   
*/
final class ScheduledReports
{
        /**
     * Creates a new report and schedules it.
     *
     * @param int $idSite
     * @param string $description Report description
     * @param string $period Schedule frequency: day, week or month
     * @param int $hour Hour (0-23) when the report should be sent
     * @param string $reportType 'email' or any other format provided via the ScheduledReports.getReportTypes hook
     * @param string $reportFormat 'pdf', 'html' or any other format provided via the ScheduledReports.getReportFormats hook
     * @param array $reports array of reports
     * @param array $parameters array of parameters
     * @param bool|int $idSegment Segment Identifier
     * @param string $evolutionPeriodFor If set to 'each', the evolution graphs cover each day within the period. If set to 'prev',
     *                                   evolution graphs cover the previous N periods.
     * @param int|null $evolutionPeriodN The previous N periods to query in evolution graphs if $evolutionPeriodFor is 'each'.
     * @param string $periodParam the period for the report, eg 'day', 'week', 'month', 'year'.
     *
     * @return int idReport generated
     */
    public function addReport($idSite, $description, $period, $hour, $reportType, $reportFormat, $reports, $parameters, $idSegment = false, $evolutionPeriodFor = 'prev', $evolutionPeriodN = null, $periodParam = null){
        //
    }
    /**
     * Updates an existing report.
     *
     * @see addReport()
     */
    public function updateReport($idReport, $idSite, $description, $period, $hour, $reportType, $reportFormat, $reports, $parameters, $idSegment = false, $evolutionPeriodFor = 'prev', $evolutionPeriodN = null, $periodParam = null){
        //
    }
    /**
     * Deletes a specific report
     *
     * @param int $idReport
     */
    public function deleteReport($idReport){
        //
    }
    /**
     * Returns the list of reports matching the passed parameters
     *
     * @param bool|int $idSite If specified, will filter reports that belong to a specific idsite
     * @param bool|string $period If specified, will filter reports that are scheduled for this period (day,week,month)
     * @param bool|int $idReport If specified, will filter the report that has the given idReport
     * @param bool $ifSuperUserReturnOnlySuperUserReports
     * @param bool|int $idSegment If specified, will filter the report that has the given idSegment
     * @throws Exception
     * @return array
     */
    public function getReports($idSite = false, $period = false, $idReport = false, $ifSuperUserReturnOnlySuperUserReports = false, $idSegment = false){
        //
    }
    /**
     * Generates a report file.
     *
     * @param int $idReport ID of the report to generate.
     * @param string $date YYYY-MM-DD
     * @param bool|false|string $language If not passed, will use default language.
     * @param bool|false|int $outputType 1 = download report, 3 = output report in browser, 4 = return report content to caller, defaults to download
     * @param bool|false|string $period If not specified, will default to the report's period set when creating the report
     * @param bool|false|string $reportFormat 'pdf', 'html' or any other format provided via the ScheduledReports.getReportFormats hook
     * @param bool|false|array $parameters array of parameters
     * @return array|void
     */
    public function generateReport($idReport, $date, $language = false, $outputType = false, $period = false, $reportFormat = false, $parameters = false){
        //
    }
    
    public function sendReport($idReport, $period = false, $date = false, $force = false){
        //
    }
}