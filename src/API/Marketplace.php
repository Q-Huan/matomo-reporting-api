<?php

namespace Matomo\ReportingApi\API;

/**
  The Marketplace API lets you manage your license key so you can download & install in one-click <a target="_blank" rel="noreferrer" href="https://matomo.org/recommends/premium-plugins/">paid premium plugins</a> you have subscribed to.   
*/
final class Marketplace
{
        /**
     * Deletes an existing license key if one is set.
     *
     * @return bool
     */
    public function deleteLicenseKey(){
        //
    }
    /**
     * Saves the given license key in case the key is actually valid (exists on the Matomo Marketplace and is not
     * yet expired).
     *
     * @param string $licenseKey
     * @return bool
     *
     * @throws Exception In case of an invalid license key
     * @throws Service\Exception In case of any network problems
     */
    public function saveLicenseKey($licenseKey){
        //
    }
}