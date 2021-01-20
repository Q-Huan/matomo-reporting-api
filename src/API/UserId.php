<?php

namespace Matomo\ReportingApi\API;

/**
  API for plugin UserId. Allows to get User IDs table.   
*/
final class UserId
{
        /**
     * Get a report of all User Ids.
     *
     * @param int $idSite
     *
     * @param string  $period
     * @param int  $date
     * @param string|bool  $segment
     *
     * @return DataTable
     */
    public function getUsers($idSite, $period, $date, $segment = false){
        //
    }
}