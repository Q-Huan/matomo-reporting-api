<?php

namespace Matomo\ReportingApi\API;

/**
  API for plugin CorePluginsAdmin   
*/
final class CorePluginsAdmin
{
        /**
     * @internal
     * @param array $settingValues Format: array('PluginName' => array(array('name' => 'SettingName1', 'value' => 'SettingValue1), ..))
     * @throws Exception
     */
    public function setSystemSettings($settingValues){
        //
    }
    /**
     * @internal
     * @param array $settingValues  Format: array('PluginName' => array(array('name' => 'SettingName1', 'value' => 'SettingValue1), ..))
     * @throws Exception
     */
    public function setUserSettings($settingValues){
        //
    }
    /**
     * @internal
     * @return array
     * @throws \Piwik\NoAccessException
     */
    public function getSystemSettings(){
        //
    }
    /**
     * @internal
     * @return array
     * @throws \Piwik\NoAccessException
     */
    public function getUserSettings(){
        //
    }
}