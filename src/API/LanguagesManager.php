<?php

namespace Matomo\ReportingApi\API;

/**
  The LanguagesManager API lets you access existing Matomo translations, and change Users languages preferences.  "getTranslationsForLanguage" will return all translation strings for a given language, so you can leverage Matomo translations in your application (and automatically benefit from the <a href='https://matomo.org/translations/' rel='noreferrer' target='_blank'>40+ translations</a>!). This is mostly useful to developers who integrate Matomo API results in their own application.  You can also request the default language to load for a user via "getLanguageForUser", or update it via "setLanguageForUser".   
*/
final class LanguagesManager
{
        /**
     * Returns true if specified language is available
     *
     * @param string $languageCode
     * @return bool true if language available; false otherwise
     */
    public function isLanguageAvailable($languageCode){
        //
    }
    /**
     * Return array of available languages
     *
     * @return array Array of strings, each containing its ISO language code
     */
    public function getAvailableLanguages(){
        //
    }
    /**
     * Return information on translations (code, language, % translated, etc)
     *
     * @param boolean $excludeNonCorePlugins excludes non core plugin from percentage calculation
     *
     * @return array Array of arrays
     */
    public function getAvailableLanguagesInfo($excludeNonCorePlugins = true){
        //
    }
    /**
     * Return array of available languages
     *
     * @return array Array of array, each containing its ISO language code and name of the language
     */
    public function getAvailableLanguageNames(){
        //
    }
    /**
     * Returns translation strings by language
     *
     * @param string $languageCode ISO language code
     * @return array|false Array of arrays, each containing 'label' (translation index)  and 'value' (translated string); false if language unavailable
     */
    public function getTranslationsForLanguage($languageCode){
        //
    }
    /**
     * Returns the language for the user
     *
     * @param string $login
     * @return string
     */
    public function getLanguageForUser($login){
        //
    }
    /**
     * Sets the language for the user
     *
     * @param string $login
     * @param string $languageCode
     * @return bool
     */
    public function setLanguageForUser($login, $languageCode){
        //
    }
    /**
     * Returns whether the user uses 12 hour clock
     *
     * @param string $login
     * @return string
     */
    public function uses12HourClockForUser($login){
        //
    }
    /**
     * Returns whether the user uses 12 hour clock
     *
     * @param string $login
     * @param bool $use12HourClock
     * @return string
     */
    public function set12HourClockForUser($login, $use12HourClock){
        //
    }
}