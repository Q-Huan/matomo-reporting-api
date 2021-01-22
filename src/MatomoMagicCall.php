<?php


namespace Matomo\ReportingApi;

/**
 * Class MatomoMagicCall
 * @package Matomo\ReportingApi
 * @property-read  \Matomo\ReportingApi\API\Actions $Actions
 * @property-read  \Matomo\ReportingApi\API\Annotations $Annotations
 * @property-read  \Matomo\ReportingApi\API\API $API
 * @property-read  \Matomo\ReportingApi\API\Contents $Contents
 * @property-read  \Matomo\ReportingApi\API\CoreAdminHome $CoreAdminHome
 * @property-read  \Matomo\ReportingApi\API\CorePluginsAdmin $CorePluginsAdmin
 * @property-read  \Matomo\ReportingApi\API\CustomDimensions $CustomDimensions
 * @property-read  \Matomo\ReportingApi\API\CustomJsTracker $CustomJsTracker
 * @property-read  \Matomo\ReportingApi\API\Dashboard $Dashboard
 * @property-read  \Matomo\ReportingApi\API\DevicePlugins $DevicePlugins
 * @property-read  \Matomo\ReportingApi\API\DevicesDetection $DevicesDetection
 * @property-read  \Matomo\ReportingApi\API\Events $Events
 * @property-read  \Matomo\ReportingApi\API\Feedback $Feedback
 * @property-read  \Matomo\ReportingApi\API\Goals $Goals
 * @property-read  \Matomo\ReportingApi\API\ImageGraph $ImageGraph
 * @property-read  \Matomo\ReportingApi\API\Insights $Insights
 * @property-read  \Matomo\ReportingApi\API\LanguagesManager $LanguagesManager
 * @property-read  \Matomo\ReportingApi\API\Live $Live
 * @property-read  \Matomo\ReportingApi\API\Login $Login
 * @property-read  \Matomo\ReportingApi\API\Marketplace $Marketplace
 * @property-read  \Matomo\ReportingApi\API\MobileMessaging $MobileMessaging
 * @property-read  \Matomo\ReportingApi\API\MultiSites $MultiSites
 * @property-read  \Matomo\ReportingApi\API\Overlay $Overlay
 * @property-read  \Matomo\ReportingApi\API\PagePerformance $PagePerformance
 * @property-read  \Matomo\ReportingApi\API\PrivacyManager $PrivacyManager
 * @property-read  \Matomo\ReportingApi\API\Referrers $Referrers
 * @property-read  \Matomo\ReportingApi\API\Resolution $Resolution
 * @property-read  \Matomo\ReportingApi\API\ScheduledReports $ScheduledReports
 * @property-read  \Matomo\ReportingApi\API\SegmentEditor $SegmentEditor
 * @property-read  \Matomo\ReportingApi\API\SEO $SEO
 * @property-read  \Matomo\ReportingApi\API\SitesManager $SitesManager
 * @property-read  \Matomo\ReportingApi\API\Tour $Tour
 * @property-read  \Matomo\ReportingApi\API\Transitions $Transitions
 * @property-read  \Matomo\ReportingApi\API\TwoFactorAuth $TwoFactorAuth
 * @property-read  \Matomo\ReportingApi\API\UserCountry $UserCountry
 * @property-read  \Matomo\ReportingApi\API\UserId $UserId
 * @property-read  \Matomo\ReportingApi\API\UserLanguage $UserLanguage
 * @property-read  \Matomo\ReportingApi\API\UsersManager $UsersManager
 * @property-read  \Matomo\ReportingApi\API\VisitFrequency $VisitFrequency
 * @property-read  \Matomo\ReportingApi\API\VisitorInterest $VisitorInterest
 * @property-read  \Matomo\ReportingApi\API\VisitsSummary $VisitsSummary
 * @property-read  \Matomo\ReportingApi\API\VisitTime $VisitTime
 * @author LunaticFish<hutongyu@vip.qq.com>
 */
class MatomoMagicCall extends QueryFactory
{
    private $module_name;

    private $method_name;

    public function __get($name)
    {
        return $this->setModuleName($name);
    }

    public function __set($name,$value){

    }

    public function __isset($name){

    }

    public function __call($name,$arguments){
        $this->setMethodName($name);
        $methodName = "{$this->getModuleName()}.{$this->getMethodName()}";
        $query = $this->getQuery($methodName);

        if(isset($arguments[0]) && is_array($arguments[0])){
            $query->setParameters($arguments[0]);
        }

        return $query;
    }

    /**
     * @return mixed
     */
    public function getModuleName()
    {
        return $this->module_name;
    }

    /**
     * @param mixed $module_name
     * @return MatomoMagicCall
     */
    public function setModuleName($module_name)
    {
        $this->module_name = $module_name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMethodName()
    {
        return $this->method_name;
    }

    /**
     * @param mixed $method_name
     * @return MatomoMagicCall
     */
    public function setMethodName($method_name)
    {
        $this->method_name = $method_name;
        return $this;
    }
}