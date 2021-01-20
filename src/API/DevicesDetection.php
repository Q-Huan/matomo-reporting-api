<?php

namespace Matomo\ReportingApi\API;

/**
  The DevicesDetection API lets you access reports on your visitors devices, brands, models, Operating system, Browsers.   
*/
final class DevicesDetection
{
        /**
     * Gets datatable displaying number of visits by device type (eg. desktop, smartphone, tablet)
     * @param int $idSite
     * @param string $period
     * @param string $date
     * @param bool|string $segment
     * @return DataTable
     */
    public function getType($idSite, $period, $date, $segment = false){
        //
    }
    /**
     * Gets datatable displaying number of visits by device manufacturer name
     * @param int $idSite
     * @param string $period
     * @param string $date
     * @param bool|string $segment
     * @return DataTable
     */
    public function getBrand($idSite, $period, $date, $segment = false){
        //
    }
    /**
     * Gets datatable displaying number of visits by device model
     * @param int $idSite
     * @param string $period
     * @param string $date
     * @param bool|string $segment
     * @return DataTable
     */
    public function getModel($idSite, $period, $date, $segment = false){
        //
    }
    /**
     * Gets datatable displaying number of visits by OS family (eg. Windows, Android, Linux)
     * @param int $idSite
     * @param string $period
     * @param string $date
     * @param bool|string $segment
     * @return DataTable
     */
    public function getOsFamilies($idSite, $period, $date, $segment = false){
        //
    }
    /**
     * Gets datatable displaying number of visits by OS version (eg. Android 4.0, Windows 7)
     * @param int $idSite
     * @param string $period
     * @param string $date
     * @param bool|string $segment
     * @return DataTable
     */
    public function getOsVersions($idSite, $period, $date, $segment = false){
        //
    }
    /**
     * Gets datatable displaying number of visits by Browser (Without version)
     * @param int $idSite
     * @param string $period
     * @param string $date
     * @param bool|string $segment
     * @return DataTable
     */
    public function getBrowsers($idSite, $period, $date, $segment = false){
        //
    }
    /**
     * Gets datatable displaying number of visits by Browser version (eg. Firefox 20, Safari 6.0)
     * @param int $idSite
     * @param string $period
     * @param string $date
     * @param bool|string $segment
     * @return DataTable
     */
    public function getBrowserVersions($idSite, $period, $date, $segment = false){
        //
    }
    /**
     * Gets datatable displaying number of visits by Browser engine (eg. Trident, Gecko, Blink,...)
     * @param int $idSite
     * @param string $period
     * @param string $date
     * @param bool|string $segment
     * @return DataTable
     */
    public function getBrowserEngines($idSite, $period, $date, $segment = false){
        //
    }
}