<?php

namespace Matomo\ReportingApi\API;

/**
  This API is the <a href='http://matomo.org/docs/analytics-api/reference/' rel='noreferrer' target='_blank'>Dashboard API</a>: it gives information about dashboards.   
*/
final class Dashboard
{
        /**
     * Get each dashboard that belongs to a user including the containing widgets that are placed within each dashboard.
     * If the user has not created any dashboard yet, the default dashboard will be returned unless
     * $returnDefaultIfEmpty is set to `false`
     *
     * @param string $login Login of the user [defaults to current user]
     * @param bool $returnDefaultIfEmpty  disable return of default dashboard
     *
     * @return array[]
     */
    public function getDashboards($login = '', $returnDefaultIfEmpty = true){
        //
    }
    /**
     * Creates a new dashboard for the given login
     *
     * Note: Only a super user is able to create dashboards for other users
     *
     * @param string $login login of the user that dashboard should be created for
     * @param string $dashboardName name of the new dashboard
     * @param bool $addDefaultWidgets  whether to add the current default widget collection or not
     * @return int|string
     */
    public function createNewDashboardForUser($login, $dashboardName = '', $addDefaultWidgets = true){
        //
    }
    /**
     * Removes a dashboard according to given dashboard id and login
     *
     * Note: Only a super user is able to remove dashboards for other users
     *
     * Also note: It is allowed to delete the first dashboard for a user, BUT
     * that will cause buggy behavior if a new dashboard is not immediately added.
     * Deleting the first dashboard (with ID = 1) should only be done for automation
     * purposes.
     *
     * @param int $idDashboard id of the dashboard to be removed
     * @param string $login  Login of the dashboard user [defaults to current user]
     */
    public function removeDashboard($idDashboard, $login = ''){
        //
    }
    /**
     * Copy a dashboard of current user to another user
     *
     * Note: current user needs super user access
     *
     * @param int $idDashboard Id of the dashboard that should be copied
     * @param string $copyToUser User the dashboard should be copied to
     * @param string $dashboardName Name of the new dashboard (defaults to 'Dashboard of {user}')
     * @return int id of the new dashboard
     * @throws \Exception if an error occurs, or dashboard can't be found
     */
    public function copyDashboardToUser($idDashboard, $copyToUser, $dashboardName = ''){
        //
    }
    /**
     * Resets a dashboard to the default widget configuration
     *
     * Note: Only a super user is able to reset dashboards for other users

     * @param int $idDashboard dashboard id
     * @param string $login user the dashboard belongs
     *
     */
    public function resetDashboardLayout($idDashboard, $login = ''){
        //
    }
}