<?php

namespace Matomo\ReportingApi\API;

/**
  The UserCountry API lets you access reports about your visitors' Countries and Continents.   
*/
final class UserCountry
{
        
    public function getCountry($idSite, $period, $date, $segment = false){
        //
    }
    
    public function getContinent($idSite, $period, $date, $segment = false){
        //
    }
    /**
     * Returns visit information for every region with at least one visit.
     *
     * @param int|string $idSite
     * @param string $period
     * @param string $date
     * @param string|bool $segment
     * @return DataTable
     */
    public function getRegion($idSite, $period, $date, $segment = false){
        //
    }
    /**
     * Returns visit information for every city with at least one visit.
     *
     * @param int|string $idSite
     * @param string $period
     * @param string $date
     * @param string|bool $segment
     * @return DataTable
     */
    public function getCity($idSite, $period, $date, $segment = false){
        //
    }
    /**
     * Returns a simple mapping from country code to country name
     *
     * @return \string[]
     */
    public function getCountryCodeMapping(){
        //
    }
    /**
     * Uses a location provider to find/guess the location of an IP address.
     *
     * See LocationProvider::getLocation to see the details
     * of the result of this function.
     *
     * @param string $ip The IP address.
     * @param bool|string $provider The ID of the provider to use or false to use the
     *                               currently configured one.
     * @throws Exception
     * @return array|false
     */
    public function getLocationFromIP($ip = false, $provider = false){
        //
    }
    /**
     * Set the location provider
     *
     * @param string $providerId  The ID of the provider to use  eg 'default', 'geoip2_php', ...
     * @throws Exception if ID is invalid
     */
    public function setLocationProvider($providerId){
        //
    }
    
    public function getNumberOfDistinctCountries($idSite, $period, $date, $segment = false){
        //
    }
}