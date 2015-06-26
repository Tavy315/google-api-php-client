<?php
/**
 * The "segments" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new Google_Service_Analytics(...);
 *   $segments = $analyticsService->segments;
 *  </code>
 */
class Google_Service_Analytics_ManagementSegments_Resource extends Google_Service_Resource
{
    /**
     * Lists segments to which the user has access.
     * (segments.listManagementSegments)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param int max-results The maximum number of segments to include in this
     * response.
     * @opt_param int start-index An index of the first segment to retrieve. Use
     * this parameter as a pagination mechanism along with the max-results
     * parameter.
     * @return Google_Service_Analytics_Segments
     */
    public function listManagementSegments($optParams = [ ])
    {
        $params = [ ];
        $params = array_merge($params, $optParams);

        return $this->call('list', [ $params ], 'Google_Service_Analytics_Segments');
    }
}
