<?php

namespace Matomo\ReportingApi\API;

/**
  The MobileMessaging API lets you manage and access all the MobileMessaging plugin features including :  - manage SMS API credential  - activate phone numbers  - check remaining credits  - send SMS   
*/
final class MobileMessaging
{
        /**
     * determine if SMS API credential are available for the current user
     *
     * @return bool true if SMS API credential are available for the current user
     */
    public function areSMSAPICredentialProvided(){
        //
    }
    /**
     * return the SMS API Provider for the current user
     *
     * @return string SMS API Provider
     */
    public function getSMSProvider(){
        //
    }
    /**
     * set the SMS API credential
     *
     * @param string $provider SMS API provider
     * @param array $credentials array with data like API Key or username
     *
     * @return bool true if SMS API credential were validated and saved, false otherwise
     */
    public function setSMSAPICredential($provider, $credentials = []){
        //
    }
    /**
     * add phone number
     *
     * @param string $phoneNumber
     *
     * @return bool true
     */
    public function addPhoneNumber($phoneNumber){
        //
    }
    /**
     * get remaining credit
     *
     * @return string remaining credit
     */
    public function getCreditLeft(){
        //
    }
    /**
     * remove phone number
     *
     * @param string $phoneNumber
     *
     * @return bool true
     */
    public function removePhoneNumber($phoneNumber){
        //
    }
    /**
     * validate phone number
     *
     * @param string $phoneNumber
     * @param string $verificationCode
     *
     * @return bool true if validation code is correct, false otherwise
     */
    public function validatePhoneNumber($phoneNumber, $verificationCode){
        //
    }
    /**
     * delete the SMS API credential
     *
     * @return bool true
     */
    public function deleteSMSAPICredential(){
        //
    }
    /**
     * Specify if normal users can manage their own SMS API credential
     *
     * @param bool $delegatedManagement false if SMS API credential only manageable by super admin, true otherwise
     */
    public function setDelegatedManagement($delegatedManagement){
        //
    }
    /**
     * Determine if normal users can manage their own SMS API credential
     *
     * @return bool false if SMS API credential only manageable by super admin, true otherwise
     */
    public function getDelegatedManagement(){
        //
    }
}