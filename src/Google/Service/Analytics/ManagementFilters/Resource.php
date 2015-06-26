<?php
/**
 * The "filters" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new Google_Service_Analytics(...);
 *   $filters = $analyticsService->filters;
 *  </code>
 */
class Google_Service_Analytics_ManagementFilters_Resource extends Google_Service_Resource
{
    /**
     * Delete a filter. (filters.delete)
     *
     * @param string $accountId Account ID to delete the filter for.
     * @param string $filterId  ID of the filter to be deleted.
     * @param array  $optParams Optional parameters.
     *
     * @return Google_Service_Analytics_Filter
     */
    public function delete($accountId, $filterId, $optParams = [ ])
    {
        $params = [
            'accountId' => $accountId,
            'filterId'  => $filterId,
        ];
        $params = array_merge($params, $optParams);

        return $this->call('delete', [ $params ], 'Google_Service_Analytics_Filter');
    }

    /**
     * Returns a filters to which the user has access. (filters.get)
     *
     * @param string $accountId Account ID to retrieve filters for.
     * @param string $filterId  Filter ID to retrieve filters for.
     * @param array  $optParams Optional parameters.
     *
     * @return Google_Service_Analytics_Filter
     */
    public function get($accountId, $filterId, $optParams = [ ])
    {
        $params = [
            'accountId' => $accountId,
            'filterId'  => $filterId,
        ];
        $params = array_merge($params, $optParams);

        return $this->call('get', [ $params ], 'Google_Service_Analytics_Filter');
    }

    /**
     * Create a new filter. (filters.insert)
     *
     * @param string                          $accountId Account ID to create filter for.
     * @param Google_Service_Analytics_Filter $postBody
     * @param array                           $optParams Optional parameters.
     *
     * @return Google_Service_Analytics_Filter
     */
    public function insert($accountId, Google_Service_Analytics_Filter $postBody, $optParams = [ ])
    {
        $params = [
            'accountId' => $accountId,
            'postBody'  => $postBody,
        ];
        $params = array_merge($params, $optParams);

        return $this->call('insert', [ $params ], 'Google_Service_Analytics_Filter');
    }

    /**
     * Lists all filters for an account (filters.listManagementFilters)
     *
     * @param string $accountId Account ID to retrieve filters for.
     * @param array  $optParams Optional parameters.
     *
     * @opt_param int max-results The maximum number of filters to include in this
     * response.
     * @opt_param int start-index An index of the first entity to retrieve. Use this
     * parameter as a pagination mechanism along with the max-results parameter.
     * @return Google_Service_Analytics_Filters
     */
    public function listManagementFilters($accountId, $optParams = [ ])
    {
        $params = [
            'accountId' => $accountId,
        ];
        $params = array_merge($params, $optParams);

        return $this->call('list', [ $params ], 'Google_Service_Analytics_Filters');
    }

    /**
     * Updates an existing filter. This method supports patch semantics.
     * (filters.patch)
     *
     * @param string                          $accountId Account ID to which the filter belongs.
     * @param string                          $filterId  ID of the filter to be updated.
     * @param Google_Service_Analytics_Filter $postBody
     * @param array                           $optParams Optional parameters.
     *
     * @return Google_Service_Analytics_Filter
     */
    public function patch($accountId, $filterId, Google_Service_Analytics_Filter $postBody, $optParams = [ ])
    {
        $params = [
            'accountId' => $accountId,
            'filterId'  => $filterId,
            'postBody'  => $postBody,
        ];
        $params = array_merge($params, $optParams);

        return $this->call('patch', [ $params ], 'Google_Service_Analytics_Filter');
    }

    /**
     * Updates an existing filter. (filters.update)
     *
     * @param string                          $accountId Account ID to which the filter belongs.
     * @param string                          $filterId  ID of the filter to be updated.
     * @param Google_Service_Analytics_Filter $postBody
     * @param array                           $optParams Optional parameters.
     *
     * @return Google_Service_Analytics_Filter
     */
    public function update($accountId, $filterId, Google_Service_Analytics_Filter $postBody, $optParams = [ ])
    {
        $params = [
            'accountId' => $accountId,
            'filterId'  => $filterId,
            'postBody'  => $postBody,
        ];
        $params = array_merge($params, $optParams);

        return $this->call('update', [ $params ], 'Google_Service_Analytics_Filter');
    }
}
