<?php

namespace Matomo\ReportingApi\API;

/**
  The Custom Dimensions API lets you manage and access reports for your configured Custom Dimensions.   
*/
final class CustomDimensions
{
        /**
     * Fetch a report for the given idDimension. Only reports for active dimensions can be fetched. Requires at least
     * view access.
     *
     * @param int $idDimension
     * @param int $idSite
     * @param string $period
     * @param string $date
     * @param bool|false $segment
     * @param bool|false $expanded
     * @param bool|false $flat
     * @param int|null   $idSubtable
     * @return DataTable|DataTable\Map
     * @throws \Exception
     */
    public function getCustomDimension($idDimension, $idSite, $period, $date, $segment = false, $expanded = false, $flat = false, $idSubtable = null){
        //
    }
    /**
     * Configures a new Custom Dimension. Note that Custom Dimensions cannot be deleted, be careful when creating one
     * as you might run quickly out of available Custom Dimension slots. Requires at least Admin access for the
     * specified website. A current list of available `$scopes` can be fetched via the API method
     * `CustomDimensions.getAvailableScopes()`. This method will also contain information whether actually Custom
     * Dimension slots are available or whether they are all already in use.
     *
     * @param int $idSite    The idSite the dimension shall belong to
     * @param string $name   The name of the dimension
     * @param string $scope  Either 'visit' or 'action'. To get an up to date list of availabe scopes fetch the
     *                       API method `CustomDimensions.getAvailableScopes`
     * @param int $active  '0' if dimension should be inactive, '1' if dimension should be active
     * @param array $extractions    Either an empty array or if extractions shall be used one or multiple extractions
     *                              the format array(array('dimension' => 'url', 'pattern' => 'index_(.+).html'), array('dimension' => 'urlparam', 'pattern' => '...'))
     *                              Supported dimensions are  eg 'url', 'urlparam' and 'action_name'. To get an up to date list of
     *                              supported dimensions request the API method `CustomDimensions.getAvailableExtractionDimensions`.
     *                              Note: Extractions can be only set for dimensions in scope 'action'.
     * @param int|bool $caseSensitive  '0' if extractions should be applied case insensitive, '1' if extractions should be applied case sensitive
     * @return int Returns the ID of the configured dimension. Note that the same idDimension will be used for different websites.
     * @throws \Exception
     */
    public function configureNewCustomDimension($idSite, $name, $scope, $active, $extractions = [], $caseSensitive = true){
        //
    }
    /**
     * Updates an existing Custom Dimension. This method updates all values, you need to pass existing values of the
     * dimension if you do not want to reset any value. Requires at least Admin access for the specified website.
     *
     * @param int $idDimension  The id of a Custom Dimension.
     * @param int $idSite       The idSite the dimension belongs to
     * @param string $name      The name of the dimension
     * @param int $active       '0' if dimension should be inactive, '1' if dimension should be active
     * @param array $extractions    Either an empty array or if extractions shall be used one or multiple extractions
     *                              the format array(array('dimension' => 'url', 'pattern' => 'index_(.+).html'), array('dimension' => 'urlparam', 'pattern' => '...'))
     *                              Supported dimensions are  eg 'url', 'urlparam' and 'action_name'. To get an up to date list of
     *                              supported dimensions request the API method `CustomDimensions.getAvailableExtractionDimensions`.
     *                              Note: Extractions can be only set for dimensions in scope 'action'.
     * @param int|bool|null $caseSensitive  '0' if extractions should be applied case insensitive, '1' if extractions should be applied case sensitive, null to keep case sensitive unchanged
     * @return int Returns the ID of the configured dimension. Note that the same idDimension will be used for different websites.
     * @throws \Exception
     */
    public function configureExistingCustomDimension($idDimension, $idSite, $name, $active, $extractions = [], $caseSensitive = null){
        //
    }
    /**
     * Get a list of all configured CustomDimensions for a given website. Requires at least Admin access for the
     * specified website.
     *
     * @param int $idSite
     * @return array
     */
    public function getConfiguredCustomDimensions($idSite){
        //
    }
    /**
     * For convenience. Hidden to reduce API surface area.
     * @hide
     */
    public function getConfiguredCustomDimensionsHavingScope($idSite, $scope){
        //
    }
    /**
     * Get a list of all supported scopes that can be used in the API method
     * `CustomDimensions.configureNewCustomDimension`. The response also contains information whether more Custom
     * Dimensions can be created or not. Requires at least Admin access for the specified website.
     *
     * @param int $idSite
     * @return array
     */
    public function getAvailableScopes($idSite){
        //
    }
    /**
     * Get a list of all available dimensions that can be used in an extraction. Requires at least Admin access
     * to one website.
     *
     * @return array
     */
    public function getAvailableExtractionDimensions(){
        //
    }
}