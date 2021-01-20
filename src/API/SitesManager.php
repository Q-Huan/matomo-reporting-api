<?php

namespace Matomo\ReportingApi\API;

/**
  The SitesManager API gives you full control on Websites in Matomo (create, update and delete), and many methods to retrieve websites based on various attributes.  This API lets you create websites via "addSite", update existing websites via "updateSite" and delete websites via "deleteSite". When creating websites, it can be useful to access internal codes used by Matomo for currencies via "getCurrencyList", or timezones via "getTimezonesList".  There are also many ways to request a list of websites: from the website ID via "getSiteFromId" or the site URL via "getSitesIdFromSiteUrl". Often, the most useful technique is to list all websites that are known to a current user, based on the token_auth, via "getSitesWithAdminAccess", "getSitesWithViewAccess" or "getSitesWithAtLeastViewAccess" (which returns both).  Some methods will affect all websites globally: "setGlobalExcludedIps" will set the list of IPs to be excluded on all websites, "setGlobalExcludedQueryParameters" will set the list of URL parameters to remove from URLs for all websites. The existing values can be fetched via "getExcludedIpsGlobal" and "getExcludedQueryParametersGlobal". See also the documentation about <a href='http://matomo.org/docs/manage-websites/' rel='noreferrer' target='_blank'>Managing Websites</a> in Matomo.   
*/
final class SitesManager
{
        /**
     * Returns the javascript tag for the given idSite.
     * This tag must be included on every page to be tracked by Matomo
     *
     * @param int $idSite
     * @param string $piwikUrl
     * @param bool $mergeSubdomains
     * @param bool $groupPageTitlesByDomain
     * @param bool $mergeAliasUrls
     * @param bool $visitorCustomVariables
     * @param bool $pageCustomVariables
     * @param bool $customCampaignNameQueryParam
     * @param bool $customCampaignKeywordParam
     * @param bool $doNotTrack
     * @param bool $disableCookies
     * @param bool $trackNoScript
     * @param bool $forceMatomoEndpoint Whether the Matomo endpoint should be forced if Matomo was installed prior 3.7.0.
     * @return string The Javascript tag ready to be included on the HTML pages
     */
    public function getJavascriptTag($idSite, $piwikUrl = '', $mergeSubdomains = false, $groupPageTitlesByDomain = false, $mergeAliasUrls = false, $visitorCustomVariables = false, $pageCustomVariables = false, $customCampaignNameQueryParam = false, $customCampaignKeywordParam = false, $doNotTrack = false, $disableCookies = false, $trackNoScript = false, $crossDomain = false, $forceMatomoEndpoint = false){
        //
    }
    /**
     * Returns image link tracking code for a given site with specified options.
     *
     * @param int $idSite The ID to generate tracking code for.
     * @param string $piwikUrl The domain and URL path to the Matomo installation.
     * @param int $idGoal An ID for a goal to trigger a conversion for.
     * @param int $revenue The revenue of the goal conversion. Only used if $idGoal is supplied.
     * @param bool $forceMatomoEndpoint Whether the Matomo endpoint should be forced if Matomo was installed prior 3.7.0.
     * @return string The HTML tracking code.
     */
    public function getImageTrackingCode($idSite, $piwikUrl = '', $actionName = false, $idGoal = false, $revenue = false, $forceMatomoEndpoint = false){
        //
    }
    /**
     * Returns all websites belonging to the specified group
     * @param string $group Group name
     * @return array of sites
     */
    public function getSitesFromGroup($group = ''){
        //
    }
    /**
     * Returns the list of website groups, including the empty group
     * if no group were specified for some websites
     *
     * @return array of group names strings
     */
    public function getSitesGroups(){
        //
    }
    /**
     * Returns the website information : name, main_url
     *
     * @throws Exception if the site ID doesn't exist or the user doesn't have access to it
     * @param int $idSite
     * @return array
     */
    public function getSiteFromId($idSite){
        //
    }
    /**
     * Returns the list of all URLs registered for the given idSite (main_url + alias URLs).
     *
     * @throws Exception if the website ID doesn't exist or the user doesn't have access to it
     * @param int $idSite
     * @return array list of URLs
     */
    public function getSiteUrlsFromId($idSite){
        //
    }
    /**
     * Returns all websites, requires Super User access
     *
     * @return array The list of websites, indexed by idsite
     */
    public function getAllSites(){
        //
    }
    /**
     * Returns the list of all the website IDs registered.
     * Requires Super User access.
     *
     * @return array The list of website IDs
     */
    public function getAllSitesId(){
        //
    }
    /**
     * Returns the list of websites with the 'admin' access for the current user.
     * For the superUser it returns all the websites in the database.
     *
     * @param bool $fetchAliasUrls
     * @param false|string $pattern
     * @param false|int    $limit
     * @return array for each site, an array of information (idsite, name, main_url, etc.)
     */
    public function getSitesWithAdminAccess($fetchAliasUrls = false, $pattern = false, $limit = false){
        //
    }
    /**
     * Returns the list of websites with the 'view' access for the current user.
     * For the superUser it doesn't return any result because the superUser has admin access on all the websites (use getSitesWithAtLeastViewAccess() instead).
     *
     * @return array for each site, an array of information (idsite, name, main_url, etc.)
     */
    public function getSitesWithViewAccess(){
        //
    }
    /**
     * Returns the list of websites with the 'view' or 'admin' access for the current user.
     * For the superUser it returns all the websites in the database.
     *
     * @param bool|int $limit Specify max number of sites to return
     * @param bool $_restrictSitesToLogin Hack necessary when running scheduled tasks, where "Super User" is forced, but sometimes not desired, see #3017
     * @return array array for each site, an array of information (idsite, name, main_url, etc.)
     */
    public function getSitesWithAtLeastViewAccess($limit = false, $_restrictSitesToLogin = false){
        //
    }
    /**
     * Returns the list of websites ID with the 'admin' access for the current user.
     * For the superUser it returns all the websites in the database.
     *
     * @return array list of websites ID
     */
    public function getSitesIdWithAdminAccess(){
        //
    }
    /**
     * Returns the list of websites ID with the 'view' access for the current user.
     * For the superUser it doesn't return any result because the superUser has admin access on all the websites (use getSitesIdWithAtLeastViewAccess() instead).
     *
     * @return array list of websites ID
     */
    public function getSitesIdWithViewAccess(){
        //
    }
    /**
     * Returns the list of websites ID with the 'write' access for the current user.
     * For the superUser it doesn't return any result because the superUser has write access on all the websites (use getSitesIdWithAtLeastWriteAccess() instead).
     *
     * @return array list of websites ID
     */
    public function getSitesIdWithWriteAccess(){
        //
    }
    /**
     * Returns the list of websites ID with the 'view' or 'admin' access for the current user.
     * For the superUser it returns all the websites in the database.
     *
     * @param bool $_restrictSitesToLogin
     * @return array list of websites ID
     */
    public function getSitesIdWithAtLeastViewAccess($_restrictSitesToLogin = false){
        //
    }
    /**
     * Returns the list of websites ID associated with a URL.
     *
     * @param string $url
     * @return array list of websites ID
     */
    public function getSitesIdFromSiteUrl($url){
        //
    }
    /**
     * Add a website.
     * Requires Super User access.
     *
     * The website is defined by a name and an array of URLs.
     * @param string $siteName Site name
     * @param array|string $urls The URLs array must contain at least one URL called the 'main_url' ;
     *                        if several URLs are provided in the array, they will be recorded
     *                        as Alias URLs for this website.
     *                        When calling API via HTTP specify multiple URLs via `&urls[]=http...&urls[]=http...`.
     * @param int $ecommerce Is Ecommerce Reporting enabled for this website?
     * @param null $siteSearch
     * @param string $searchKeywordParameters Comma separated list of search keyword parameter names
     * @param string $searchCategoryParameters Comma separated list of search category parameter names
     * @param string $excludedIps Comma separated list of IPs to exclude from the reports (allows wildcards)
     * @param null $excludedQueryParameters
     * @param string $timezone Timezone string, eg. 'Europe/London'
     * @param string $currency Currency, eg. 'EUR'
     * @param string $group Website group identifier
     * @param string $startDate Date at which the statistics for this website will start. Defaults to today's date in YYYY-MM-DD format
     * @param null|string $excludedUserAgents
     * @param int $keepURLFragments If 1, URL fragments will be kept when tracking. If 2, they
     *                              will be removed. If 0, the default global behavior will be used.
     * @param array|null $settingValues JSON serialized settings eg {settingName: settingValue, ...}
     * @see getKeepURLFragmentsGlobal.
     * @param string $type The website type, defaults to "website" if not set.
     * @param bool|null $excludeUnknownUrls Track only URL matching one of website URLs
     *
     * @return int the website ID created
     */
    public function addSite($siteName, $urls = null, $ecommerce = null, $siteSearch = null, $searchKeywordParameters = null, $searchCategoryParameters = null, $excludedIps = null, $excludedQueryParameters = null, $timezone = null, $currency = null, $group = null, $startDate = null, $excludedUserAgents = null, $keepURLFragments = null, $type = null, $settingValues = null, $excludeUnknownUrls = null){
        //
    }
    
    public function getSiteSettings($idSite){
        //
    }
    /**
     * Delete a website from the database, given its Id. The method deletes the actual site as well as some associated
     * data. However, it does not delete any logs or archives that belong to this website. You can delete logs and
     * archives for a site manually as described in this FAQ: http://matomo.org/faq/how-to/faq_73/ .
     *
     * Requires Super User access.
     *
     * @param int $idSite
     * @throws Exception
     */
    public function deleteSite($idSite){
        //
    }
    /**
     * Add a list of alias Urls to the given idSite
     *
     * If some URLs given in parameter are already recorded as alias URLs for this website,
     * they won't be duplicated. The 'main_url' of the website won't be affected by this method.
     *
     * @param int $idSite
     * @param array|string $urls When calling API via HTTP specify multiple URLs via `&urls[]=http...&urls[]=http...`.
     * @return int the number of inserted URLs
     */
    public function addSiteAliasUrls($idSite, $urls){
        //
    }
    /**
     * Set the list of alias Urls for the given idSite
     *
     * Completely overwrites the current list of URLs with the provided list.
     * The 'main_url' of the website won't be affected by this method.
     *
     * @return int the number of inserted URLs
     */
    public function setSiteAliasUrls($idSite, $urls = []){
        //
    }
    /**
     * Get the start and end IP addresses for an IP address range
     *
     * @param string $ipRange IP address range in presentation format
     * @return array|false Array( low, high ) IP addresses in presentation format; or false if error
     */
    public function getIpsForRange($ipRange){
        //
    }
    /**
     * Sets IPs to be excluded from all websites. IPs can contain wildcards.
     * Will also apply to websites created in the future.
     *
     * @param string $excludedIps Comma separated list of IPs to exclude from being tracked (allows wildcards)
     * @return bool
     */
    public function setGlobalExcludedIps($excludedIps){
        //
    }
    /**
     * Sets Site Search keyword/category parameter names, to be used on websites which have not specified these values
     * Expects Comma separated list of query params names
     *
     * @param string
     * @param string
     * @return bool
     */
    public function setGlobalSearchParameters($searchKeywordParameters, $searchCategoryParameters){
        //
    }
    /**
     * @return string Comma separated list of URL parameters
     */
    public function getSearchKeywordParametersGlobal(){
        //
    }
    /**
     * @return string Comma separated list of URL parameters
     */
    public function getSearchCategoryParametersGlobal(){
        //
    }
    /**
     * Returns the list of URL query parameters that are excluded from all websites
     *
     * @return string Comma separated list of URL parameters
     */
    public function getExcludedQueryParametersGlobal(){
        //
    }
    /**
     * Returns the list of user agent substrings to look for when excluding visits for
     * all websites. If a visitor's user agent string contains one of these substrings,
     * their visits will not be included.
     *
     * @return string Comma separated list of strings.
     */
    public function getExcludedUserAgentsGlobal(){
        //
    }
    /**
     * Sets list of user agent substrings to look for when excluding visits. For more info,
     * @see getExcludedUserAgentsGlobal.
     *
     * @param string $excludedUserAgents Comma separated list of strings. Each element is trimmed,
     *                                   and empty strings are removed.
     */
    public function setGlobalExcludedUserAgents($excludedUserAgents){
        //
    }
    /**
     * Returns true if the default behavior is to keep URL fragments when tracking,
     * false if otherwise.
     *
     * @return bool
     */
    public function getKeepURLFragmentsGlobal(){
        //
    }
    /**
     * Sets whether the default behavior should be to keep URL fragments when
     * tracking or not.
     *
     * @param $enabled bool If true, the default behavior will be to keep URL
     *                      fragments when tracking. If false, the default
     *                      behavior will be to remove them.
     */
    public function setKeepURLFragmentsGlobal($enabled){
        //
    }
    /**
     * Sets list of URL query parameters to be excluded on all websites.
     * Will also apply to websites created in the future.
     *
     * @param string $excludedQueryParameters Comma separated list of URL query parameters to exclude from URLs
     * @return bool
     */
    public function setGlobalExcludedQueryParameters($excludedQueryParameters){
        //
    }
    /**
     * Returns the list of IPs that are excluded from all websites
     *
     * @return string Comma separated list of IPs
     */
    public function getExcludedIpsGlobal(){
        //
    }
    /**
     * Returns the default currency that will be set when creating a website through the API.
     *
     * @return string Currency ID eg. 'USD'
     */
    public function getDefaultCurrency(){
        //
    }
    /**
     * Sets the default currency that will be used when creating websites
     *
     * @param string $defaultCurrency Currency code, eg. 'USD'
     * @return bool
     */
    public function setDefaultCurrency($defaultCurrency){
        //
    }
    /**
     * Returns the default timezone that will be set when creating a website through the API.
     * Via the UI, if the default timezone is not UTC, it will be pre-selected in the drop down
     *
     * @return string Timezone eg. UTC+7 or Europe/Paris
     */
    public function getDefaultTimezone(){
        //
    }
    /**
     * Sets the default timezone that will be used when creating websites
     *
     * @param string $defaultTimezone Timezone string eg. Europe/Paris or UTC+8
     * @return bool
     */
    public function setDefaultTimezone($defaultTimezone){
        //
    }
    /**
     * Update an existing website.
     * If only one URL is specified then only the main url will be updated.
     * If several URLs are specified, both the main URL and the alias URLs will be updated.
     *
     * @param int $idSite website ID defining the website to edit
     * @param string $siteName website name
     * @param string|array $urls the website URLs
     *                           When calling API via HTTP specify multiple URLs via `&urls[]=http...&urls[]=http...`.
     * @param int $ecommerce Whether Ecommerce is enabled, 0 or 1
     * @param null|int $siteSearch Whether site search is enabled, 0 or 1
     * @param string $searchKeywordParameters Comma separated list of search keyword parameter names
     * @param string $searchCategoryParameters Comma separated list of search category parameter names
     * @param string $excludedIps Comma separated list of IPs to exclude from being tracked (allows wildcards)
     * @param null|string $excludedQueryParameters
     * @param string $timezone Timezone
     * @param string $currency Currency code
     * @param string $group Group name where this website belongs
     * @param string $startDate Date at which the statistics for this website will start. Defaults to today's date in YYYY-MM-DD format
     * @param null|string $excludedUserAgents
     * @param int|null $keepURLFragments If 1, URL fragments will be kept when tracking. If 2, they
     *                                   will be removed. If 0, the default global behavior will be used.
     * @param string $type The Website type, default value is "website"
     * @param array|null $settingValues JSON serialized settings eg {settingName: settingValue, ...}
     * @param bool|null $excludeUnknownUrls Track only URL matching one of website URLs
     * @throws Exception
     * @see getKeepURLFragmentsGlobal. If null, the existing value will
     *                                   not be modified.
     *
     * @return bool true on success
     */
    public function updateSite($idSite, $siteName = null, $urls = null, $ecommerce = null, $siteSearch = null, $searchKeywordParameters = null, $searchCategoryParameters = null, $excludedIps = null, $excludedQueryParameters = null, $timezone = null, $currency = null, $group = null, $startDate = null, $excludedUserAgents = null, $keepURLFragments = null, $type = null, $settingValues = null, $excludeUnknownUrls = null){
        //
    }
    /**
     * Returns the list of supported currencies
     * @see getCurrencySymbols()
     * @return array ( currencyId => currencyName)
     */
    public function getCurrencyList(){
        //
    }
    /**
     * Returns the list of currency symbols
     * @see getCurrencyList()
     * @return array( currencyId => currencySymbol )
     */
    public function getCurrencySymbols(){
        //
    }
    /**
     * Return true if Timezone support is enabled on server
     *
     * @return bool
     */
    public function isTimezoneSupportEnabled(){
        //
    }
    /**
     * Returns the list of timezones supported.
     * Used for addSite and updateSite
     *
     * @return array of timezone strings
     */
    public function getTimezonesList(){
        //
    }
    /**
     * Returns a user-friendly label for a timezone.
     * This is usually the country name of the timezone. For countries spanning multiple timezones,
     * a city/location name is added to avoid ambiguity.
     *
     * @param string $timezone a timezone, e.g. "Asia/Tokyo" or "America/Los_Angeles"
     * @param string $countryCode an upper-case country code (if not supplied, it will be looked up)
     * @param bool $multipleTimezonesInCountry whether there are multiple timezones in the country (if not supplied, it will be looked up)
     * @return string a timezone label, e.g. "Japan" or "United States - Los Angeles"
     */
    public function getTimezoneName($timezone, $countryCode = null, $multipleTimezonesInCountry = null){
        //
    }
    /**
     * Returns the list of unique timezones from all configured sites.
     *
     * @return array ( string )
     */
    public function getUniqueSiteTimezones(){
        //
    }
    
    public function renameGroup($oldGroupName, $newGroupName){
        //
    }
    /**
     * Find websites matching the given pattern.
     *
     * Any website will be returned that matches the pattern in the name, URL or group.
     * To limit the number of returned sites you can either specify `filter_limit` as usual or `limit` which is
     * faster.
     *
     * @param string $pattern
     * @param int|false $limit
     * @return array
     */
    public function getPatternMatchSites($pattern, $limit = false){
        //
    }
    /**
     * Returns the number of websites to display per page.
     *
     * For example this is used in the All Websites Dashboard, in the Website Selector etc. If multiple websites are
     * shown somewhere, one should request this method to detect how many websites should be shown per page when
     * using paging. To use paging is always recommended since some installations have thousands of websites.
     *
     * @return int
     */
    public function getNumWebsitesToDisplayPerPage(){
        //
    }
}