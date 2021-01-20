<?php

namespace Matomo\ReportingApi\API;

/**
  API for plugin CustomJsTracker   
*/
final class CustomJsTracker
{
        /**
     * Detects whether plugin trackers will be automatically added to piwik.js or not. If not, the plugin tracker files
     * need to be loaded manually.
     * @return bool
     */
    public function doesIncludePluginTrackersAutomatically(){
        //
    }
}