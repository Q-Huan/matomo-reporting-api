<?php

namespace Matomo\ReportingApi\API;

/**
  VisitFrequency API lets you access a list of metrics related to Returning Visitors.   
*/
final class VisitFrequency
{
        /**
     * @param int $idSite
     * @param string $period
     * @param string $date
     * @param bool|string $segment
     * @param bool|array $columns
     * @return mixed
     */
    public function get($idSite, $period, $date, $segment = false, $columns = false){
        //
    }
}