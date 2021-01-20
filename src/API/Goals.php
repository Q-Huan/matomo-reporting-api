<?php

namespace Matomo\ReportingApi\API;

/**
  Goals API lets you Manage existing goals, via "updateGoal" and "deleteGoal", create new Goals via "addGoal", or list existing Goals for one or several websites via "getGoals"  If you are <a href='http://matomo.org/docs/ecommerce-analytics/' target='_blank'>tracking Ecommerce orders and products</a> on your site, the functions "getItemsSku", "getItemsName" and "getItemsCategory" will return the list of products purchased on your site, either grouped by Product SKU, Product Name or Product Category. For each name, SKU or category, the following metrics are returned: Total revenue, Total quantity, average price, average quantity, number of orders (or abandoned carts) containing this product, number of visits on the Product page, Conversion rate.  By default, these functions return the 'Products purchased'. These functions also accept an optional parameter &abandonedCarts=1. If the parameter is set, it will instead return the metrics for products that were left in an abandoned cart therefore not purchased.  The API also lets you request overall Goal metrics via the method "get": Conversions, Visits with at least one conversion, Conversion rate and Revenue. If you wish to request specific metrics about Ecommerce goals, you can set the parameter &idGoal=ecommerceAbandonedCart to get metrics about abandoned carts (including Lost revenue, and number of items left in the cart) or &idGoal=ecommerceOrder to get metrics about Ecommerce orders (number of orders, visits with an order, subtotal, tax, shipping, discount, revenue, items ordered)  See also the documentation about <a href='http://matomo.org/docs/tracking-goals-web-analytics/' rel='noreferrer' target='_blank'>Tracking Goals</a> in Matomo.   
*/
final class Goals
{
        /**
     * Return a single goal.
     *
     * @param int $idSite
     * @param int $idGoal
     * @return array An array of goal attributes.
     */
    public function getGoal($idSite, $idGoal){
        //
    }
    /**
     * Returns all Goals for a given website, or list of websites
     *
     * @param string|array $idSite Array or Comma separated list of website IDs to request the goals for
     * @return array Array of Goal attributes
     */
    public function getGoals($idSite){
        //
    }
    /**
     * Creates a Goal for a given website.
     *
     * @param int $idSite
     * @param string $name
     * @param string $matchAttribute 'url', 'title', 'file', 'external_website', 'manually', 'visit_duration', 'visit_total_actions', 'visit_total_pageviews',
     *                               'event_action', 'event_category' or 'event_name'
     * @param string $pattern eg. purchase-confirmation.htm or numeric value if used with a numeric match attribute
     * @param string $patternType 'regex', 'contains', 'exact', or 'greater_than' for numeric match attributes
     * @param bool $caseSensitive
     * @param bool|float $revenue If set, default revenue to assign to conversions
     * @param bool $allowMultipleConversionsPerVisit By default, multiple conversions in the same visit will only record the first conversion.
     *                         If set to true, multiple conversions will all be recorded within a visit (useful for Ecommerce goals)
     * @param string $description
     * @return int ID of the new goal
     */
    public function addGoal($idSite, $name, $matchAttribute, $pattern, $patternType, $caseSensitive = false, $revenue = false, $allowMultipleConversionsPerVisit = false, $description = '', $useEventValueAsRevenue = false){
        //
    }
    /**
     * Updates a Goal description.
     * Will not update or re-process the conversions already recorded
     *
     * @see addGoal() for parameters description
     * @param int $idSite
     * @param int $idGoal
     * @param $name
     * @param $matchAttribute
     * @param string $pattern
     * @param string $patternType
     * @param bool $caseSensitive
     * @param bool|float $revenue
     * @param bool $allowMultipleConversionsPerVisit
     * @param string $description
     * @return void
     */
    public function updateGoal($idSite, $idGoal, $name, $matchAttribute, $pattern, $patternType, $caseSensitive = false, $revenue = false, $allowMultipleConversionsPerVisit = false, $description = '', $useEventValueAsRevenue = false){
        //
    }
    /**
     * Soft deletes a given Goal.
     * Stats data in the archives will still be recorded, but not displayed.
     *
     * @param int $idSite
     * @param int $idGoal
     * @return void
     */
    public function deleteGoal($idSite, $idGoal){
        //
    }
    
    public function getItemsSku($idSite, $period, $date, $abandonedCarts = false, $segment = false){
        //
    }
    
    public function getItemsName($idSite, $period, $date, $abandonedCarts = false, $segment = false){
        //
    }
    
    public function getItemsCategory($idSite, $period, $date, $abandonedCarts = false, $segment = false){
        //
    }
    /**
     * Returns Goals data.
     *
     * @param int $idSite
     * @param string $period
     * @param string $date
     * @param bool $segment
     * @param bool|int $idGoal
     * @param array $columns Array of metrics to fetch: nb_conversions, conversion_rate, revenue
     * @param bool $showAllGoalSpecificMetrics whether to show all goal specific metrics when no goal is set
     * @return DataTable
     */
    public function get($idSite, $period, $date, $segment = false, $idGoal = false, $columns = [], $showAllGoalSpecificMetrics = false, $compare = false){
        //
    }
    /**
     * Similar to {@link get()} but does not return any metrics for new and returning visitors. It won't apply
     * any segment by default. This method is deprecated from the API as it is only there to make the implementation of
     * the actual {@link get()} method easy.
     *
     * @deprecated
     * @internal
     */
    public function getMetrics($idSite, $period, $date, $segment = false, $idGoal = false, $columns = [], $showAllGoalSpecificMetrics = false){
        //
    }
    /**
     * Gets a DataTable that maps ranges of days to the number of conversions that occurred
     * within those ranges, for the specified site, date range, segment and goal.
     *
     * @param int $idSite The site to select data from.
     * @param string $period The period type.
     * @param string $date The date type.
     * @param string|bool $segment The segment.
     * @param int|bool $idGoal The id of the goal to get data for. If this is set to false,
     *                         data for every goal that belongs to $idSite is returned.
     * @return false|DataTable
     */
    public function getDaysToConversion($idSite, $period, $date, $segment = false, $idGoal = false){
        //
    }
    /**
     * Gets a DataTable that maps ranges of visit counts to the number of conversions that
     * occurred on those visits for the specified site, date range, segment and goal.
     *
     * @param int $idSite The site to select data from.
     * @param string $period The period type.
     * @param string $date The date type.
     * @param string|bool $segment The segment.
     * @param int|bool $idGoal The id of the goal to get data for. If this is set to false,
     *                         data for every goal that belongs to $idSite is returned.
     * @return bool|DataTable
     */
    public function getVisitsUntilConversion($idSite, $period, $date, $segment = false, $idGoal = false){
        //
    }
}