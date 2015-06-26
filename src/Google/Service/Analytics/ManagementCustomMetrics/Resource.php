<?php
/**
 * The "customMetrics" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new Google_Service_Analytics(...);
 *   $customMetrics = $analyticsService->customMetrics;
 *  </code>
 */
class Google_Service_Analytics_ManagementCustomMetrics_Resource extends Google_Service_Resource
{
    /**
     * Get a custom metric to which the user has access. (customMetrics.get)
     *
     * @param string $accountId      Account ID for the custom metric to retrieve.
     * @param string $webPropertyId  Web property ID for the custom metric to
     *                               retrieve.
     * @param string $customMetricId The ID of the custom metric to retrieve.
     * @param array  $optParams      Optional parameters.
     *
     * @return Google_Service_Analytics_CustomMetric
     */
    public function get($accountId, $webPropertyId, $customMetricId, $optParams = [ ])
    {
        $params = [
            'accountId'      => $accountId,
            'webPropertyId'  => $webPropertyId,
            'customMetricId' => $customMetricId,
        ];
        $params = array_merge($params, $optParams);

        return $this->call('get', [ $params ], 'Google_Service_Analytics_CustomMetric');
    }

    /**
     * Create a new custom metric. (customMetrics.insert)
     *
     * @param string                                $accountId     Account ID for the custom metric to create.
     * @param string                                $webPropertyId Web property ID for the custom dimension to
     *                                                             create.
     * @param Google_Service_Analytics_CustomMetric $postBody
     * @param array                                 $optParams     Optional parameters.
     *
     * @return Google_Service_Analytics_CustomMetric
     */
    public function insert($accountId, $webPropertyId, Google_Service_Analytics_CustomMetric $postBody, $optParams = [ ])
    {
        $params = [
            'accountId'     => $accountId,
            'webPropertyId' => $webPropertyId,
            'postBody'      => $postBody,
        ];
        $params = array_merge($params, $optParams);

        return $this->call('insert', [ $params ], 'Google_Service_Analytics_CustomMetric');
    }

    /**
     * Lists custom metrics to which the user has access.
     * (customMetrics.listManagementCustomMetrics)
     *
     * @param string $accountId     Account ID for the custom metrics to retrieve.
     * @param string $webPropertyId Web property ID for the custom metrics to
     *                              retrieve.
     * @param array  $optParams     Optional parameters.
     *
     * @opt_param int max-results The maximum number of custom metrics to include in
     * this response.
     * @opt_param int start-index An index of the first entity to retrieve. Use this
     * parameter as a pagination mechanism along with the max-results parameter.
     * @return Google_Service_Analytics_CustomMetrics
     */
    public function listManagementCustomMetrics($accountId, $webPropertyId, $optParams = [ ])
    {
        $params = [
            'accountId'     => $accountId,
            'webPropertyId' => $webPropertyId,
        ];
        $params = array_merge($params, $optParams);

        return $this->call('list', [ $params ], 'Google_Service_Analytics_CustomMetrics');
    }

    /**
     * Updates an existing custom metric. This method supports patch semantics.
     * (customMetrics.patch)
     *
     * @param string                                $accountId      Account ID for the custom metric to update.
     * @param string                                $webPropertyId  Web property ID for the custom metric to update.
     * @param string                                $customMetricId Custom metric ID for the custom metric to
     *                                                              update.
     * @param Google_Service_Analytics_CustomMetric $postBody
     * @param array                                 $optParams      Optional parameters.
     *
     * @opt_param bool ignoreCustomDataSourceLinks Force the update and ignore any
     * warnings related to the custom metric being linked to a custom data source /
     * data set.
     * @return Google_Service_Analytics_CustomMetric
     */
    public function patch($accountId, $webPropertyId, $customMetricId, Google_Service_Analytics_CustomMetric $postBody, $optParams = [ ])
    {
        $params = [
            'accountId'      => $accountId,
            'webPropertyId'  => $webPropertyId,
            'customMetricId' => $customMetricId,
            'postBody'       => $postBody,
        ];
        $params = array_merge($params, $optParams);

        return $this->call('patch', [ $params ], 'Google_Service_Analytics_CustomMetric');
    }

    /**
     * Updates an existing custom metric. (customMetrics.update)
     *
     * @param string                                $accountId      Account ID for the custom metric to update.
     * @param string                                $webPropertyId  Web property ID for the custom metric to update.
     * @param string                                $customMetricId Custom metric ID for the custom metric to
     *                                                              update.
     * @param Google_Service_Analytics_CustomMetric $postBody
     * @param array                                 $optParams      Optional parameters.
     *
     * @opt_param bool ignoreCustomDataSourceLinks Force the update and ignore any
     * warnings related to the custom metric being linked to a custom data source /
     * data set.
     * @return Google_Service_Analytics_CustomMetric
     */
    public function update($accountId, $webPropertyId, $customMetricId, Google_Service_Analytics_CustomMetric $postBody, $optParams = [ ])
    {
        $params = [
            'accountId'      => $accountId,
            'webPropertyId'  => $webPropertyId,
            'customMetricId' => $customMetricId,
            'postBody'       => $postBody,
        ];
        $params = array_merge($params, $optParams);

        return $this->call('update', [ $params ], 'Google_Service_Analytics_CustomMetric');
    }
}
