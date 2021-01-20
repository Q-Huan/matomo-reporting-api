<?php

namespace Matomo\ReportingApi\API;

/**
  The UsersManager API lets you Manage Users and their permissions to access specific websites.  You can create users via "addUser", update existing users via "updateUser" and delete users via "deleteUser". There are many ways to list users based on their login "getUser" and "getUsers", their email "getUserByEmail", or which users have permission (view or admin) to access the specified websites "getUsersWithSiteAccess".  Existing Permissions are listed given a login via "getSitesAccessFromUser", or a website ID via "getUsersAccessFromSite", or you can list all users and websites for a given permission via "getUsersSitesFromAccess". Permissions are set and updated via the method "setUserAccess". See also the documentation about <a href='http://matomo.org/docs/manage-users/' rel='noreferrer' target='_blank'>Managing Users</a> in Matomo.  
*/
final class UsersManager
{
        /**
     * Get the list of all available roles.
     * It does not return the super user role, and neither the "noaccess" role.
     * @return array[]  Returns an array containing information about each role
     */
    public function getAvailableRoles(){
        //
    }
    /**
     * Get the list of all available capabilities.
     * @return array[]  Returns an array containing information about each capability
     */
    public function getAvailableCapabilities(){
        //
    }
    /**
     * Sets a user preference. Plugins can add custom preference names by declaring them in their plugin config/config.php
     * like this:
     *
     * ```php
     * return array('usersmanager.user_preference_names' => DI\add(array('preference_name_1', 'preference_name_2')));
     * ```
     *
     * @param string $userLogin
     * @param string $preferenceName
     * @param string $preferenceValue
     * @return void
     */
    public function setUserPreference($userLogin, $preferenceName, $preferenceValue){
        //
    }
    /**
     * Gets a user preference
     * @param string $preferenceName
     * @param string|bool $userLogin Optional, defaults to current user log in when set to false.
     * @return bool|string
     */
    public function getUserPreference($preferenceName, $userLogin = false){
        //
    }
    /**
     * Returns all users with their role for $idSite.
     *
     * @param int $idSite
     * @param int|null $limit
     * @param int|null $offset
     * @param string|null $filter_search text to search for in the user's login and email (if any)
     * @param string|null $filter_access only select users with this access to $idSite. can be 'noaccess', 'some', 'view', 'admin', 'superuser'
     *                                   Filtering by 'superuser' is only allowed for other superusers.
     * @return array
     */
    public function getUsersPlusRole($idSite, $limit = null, $offset = 0, $filter_search = null, $filter_access = null){
        //
    }
    /**
     * Returns the list of all the users
     *
     * @param string $userLogins Comma separated list of users to select. If not specified, will return all users
     * @return array the list of all the users
     */
    public function getUsers($userLogins = ''){
        //
    }
    /**
     * Returns the list of all the users login
     *
     * @return array the list of all the users login
     */
    public function getUsersLogin(){
        //
    }
    /**
     * For each user, returns the list of website IDs where the user has the supplied $access level.
     * If a user doesn't have the given $access to any website IDs,
     * the user will not be in the returned array.
     *
     * @param string Access can have the following values : 'view' or 'admin'
     *
     * @return array    The returned array has the format
     *                    array(
     *                        login1 => array ( idsite1,idsite2),
     *                        login2 => array(idsite2),
     *                        ...
     *                    )
     */
    public function getUsersSitesFromAccess($access){
        //
    }
    /**
     * For each user, returns their access level for the given $idSite.
     * If a user doesn't have any access to the $idSite ('noaccess'),
     * the user will not be in the returned array.
     *
     * @param int $idSite website ID
     *
     * @return array    The returned array has the format
     *                    array(
     *                        login1 => 'view',
     *                        login2 => 'admin',
     *                        login3 => 'view',
     *                        ...
     *                    )
     */
    public function getUsersAccessFromSite($idSite){
        //
    }
    
    public function getUsersWithSiteAccess($idSite, $access){
        //
    }
    /**
     * For each website ID, returns the access level of the given $userLogin.
     * If the user doesn't have any access to a website ('noaccess'),
     * this website will not be in the returned array.
     * If the user doesn't have any access, the returned array will be an empty array.
     *
     * @param string $userLogin User that has to be valid
     *
     * @return array    The returned array has the format
     *                    array(
     *                        idsite1 => 'view',
     *                        idsite2 => 'admin',
     *                        idsite3 => 'view',
     *                        ...
     *                    )
     */
    public function getSitesAccessFromUser($userLogin){
        //
    }
    /**
     * For each website ID, returns the access level of the given $userLogin (if the user is not a superuser).
     * If the user doesn't have any access to a website ('noaccess'),
     * this website will not be in the returned array.
     * If the user doesn't have any access, the returned array will be an empty array.
     *
     * @param string $userLogin User that has to be valid
     *
     * @param int|null $limit
     * @param int|null $offset
     * @param string|null $filter_search text to search for in site name, URLs, or group.
     * @param string|null $filter_access access level to select for, can be 'some', 'view' or 'admin' (by default 'some')
     * @return array    The returned array has the format
     *                    array(
     *                        ['idsite' => 1, 'site_name' => 'the site', 'access' => 'admin'],
     *                        ['idsite' => 2, 'site_name' => 'the other site', 'access' => 'view'],
     *                        ...
     *                    )
     * @throws Exception
     */
    public function getSitesAccessForUser($userLogin, $limit = null, $offset = 0, $filter_search = null, $filter_access = null){
        //
    }
    /**
     * Returns the user information (login, password hash, email, date_registered, etc.)
     *
     * @param string $userLogin the user login
     *
     * @return array the user information
     */
    public function getUser($userLogin){
        //
    }
    /**
     * Returns the user information (login, password hash, email, date_registered, etc.)
     *
     * @param string $userEmail the user email
     *
     * @return array the user information
     */
    public function getUserByEmail($userEmail){
        //
    }
    /**
     * Add a user in the database.
     * A user is defined by
     * - a login that has to be unique and valid
     * - a password that has to be valid
     * - an email that has to be in a correct format
     *
     * @see userExists()
     * @see isValidLoginString()
     * @see isValidPasswordString()
     * @see isValidEmailString()
     *
     * @exception in case of an invalid parameter
     */
    public function addUser($userLogin, $password, $email, $_isPasswordHashed = false, $initialIdSite = null){
        //
    }
    /**
     * Enable or disable Super user access to the given user login. Note: When granting Super User access all previous
     * permissions of the user will be removed as the user gains access to everything.
     *
     * @param string   $userLogin          the user login.
     * @param bool|int $hasSuperUserAccess true or '1' to grant Super User access, false or '0' to remove Super User
     *                                     access.
     * @param string $passwordConfirmation the current user's password. For security purposes, this value should be
     *                                     sent as a POST parameter.
     * @throws \Exception
     */
    public function setSuperUserAccess($userLogin, $hasSuperUserAccess, $passwordConfirmation = null){
        //
    }
    /**
     * Detect whether the current user has super user access or not.
     *
     * @return bool
     */
    public function hasSuperUserAccess(){
        //
    }
    /**
     * Returns a list of all Super Users containing there userLogin and email address.
     *
     * @return array
     */
    public function getUsersHavingSuperUserAccess(){
        //
    }
    /**
     * Updates a user in the database.
     * Only login and password are required (case when we update the password).
     *
     * If password or email changes, it is required to also specify the password of the current user needs to be specified
     * to confirm this change.
     *
     * @see addUser() for all the parameters
     */
    public function updateUser($userLogin, $password = false, $email = false, $_isPasswordHashed = false, $passwordConfirmation = false){
        //
    }
    /**
     * Delete one or more users and all its access, given its login.
     *
     * @param string $userLogin the user login(s).
     *
     * @throws Exception if the user doesn't exist or if deleting the users would leave no superusers.
     *
     * @return bool true on success
     */
    public function deleteUser($userLogin){
        //
    }
    /**
     * Returns true if the given userLogin is known in the database
     *
     * @param string $userLogin
     * @return bool true if the user is known
     */
    public function userExists($userLogin){
        //
    }
    /**
     * Returns true if user with given email (userEmail) is known in the database, or the Super User
     *
     * @param string $userEmail
     * @return bool true if the user is known
     */
    public function userEmailExists($userEmail){
        //
    }
    /**
     * Returns the first login name of an existing user that has the given email address. If no user can be found for
     * this user an error will be returned.
     *
     * @param string $userEmail
     * @return bool true if the user is known
     */
    public function getUserLoginFromUserEmail($userEmail){
        //
    }
    /**
     * Set an access level to a given user for a list of websites ID.
     *
     * If access = 'noaccess' the current access (if any) will be deleted.
     * If access = 'view' or 'admin' the current access level is deleted and updated with the new value.
     *
     * @param string $userLogin The user login
     * @param string|array $access Access to grant. Must have one of the following value : noaccess, view, write, admin.
     *                              May also be an array to sent additional capabilities
     * @param int|array $idSites The array of idSites on which to apply the access level for the user.
     *       If the value is "all" then we apply the access level to all the websites ID for which the current authentificated user has an 'admin' access.
     * @throws Exception if the user doesn't exist
     * @throws Exception if the access parameter doesn't have a correct value
     * @throws Exception if any of the given website ID doesn't exist
     */
    public function setUserAccess($userLogin, $access, $idSites){
        //
    }
    /**
     * Adds the given capabilities to the given user for the given sites.
     * The capability will be added only when the user also has access to a site, for example View, Write, or Admin.
     * Note: You can neither add any capability to a super user, nor to the anonymous user.
     * Note: If the user has assigned a role which already grants the given capability, the capability will not be added in
     * the backend.
     *
     * @param string $userLogin The user login
     * @param string|string[] $capabilities  To fetch a list of available capabilities call "UsersManager.getAvailableCapabilities".
     * @param int|int[] $idSites
     * @throws Exception
     */
    public function addCapabilities($userLogin, $capabilities, $idSites){
        //
    }
    /**
     * Removes the given capabilities from the given user for the given sites.
     * The capability will be only removed if it is actually granted as a separate capability. If the user has a role
     * that includes a specific capability, for example "Admin", then the capability will not be removed because the
     * assigned role will always include this capability.
     *
     * @param string $userLogin The user login
     * @param string|string[] $capabilities  To fetch a list of available capabilities call "UsersManager.getAvailableCapabilities".
     * @param int|int[] $idSites
     * @throws Exception
     */
    public function removeCapabilities($userLogin, $capabilities, $idSites){
        //
    }
    /**
     * Generates an app specific API token every time you call this method. You should ideally store this token securely
     * in your app and not generate a new token every time.
     *
     * If the username/password combination is incorrect an invalid token will be returned.
     *
     * @param string $userLogin Login or Email address
     * @param string $passwordConfirmation the current user's password. For security purposes, this value should be
     *                                     sent as a POST parameter.
     * @param string $description The description for this app specific password, for example your app name. Max 100 characters are allowed
     * @param string $expireDate Optionally a date when the token should expire
     * @param string $expireHours Optionally number of hours for how long the token should be valid before it expires. 
     *                            If expireDate is set and expireHours, then expireDate will be used.
     *                            If expireDate is set and expireHours, then expireDate will be used.
     * @return string
     */
    public function createAppSpecificTokenAuth($userLogin, $passwordConfirmation, $description, $expireDate = null, $expireHours = 0){
        //
    }
    
    public function newsletterSignup(){
        //
    }
}