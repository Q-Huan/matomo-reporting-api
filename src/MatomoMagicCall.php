<?php


namespace Matomo\ReportingApi;


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
        $query = $this->getQuery(
            $this->getModuleName().
            $this->getMethodName()
        );
        var_dump($arguments);
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