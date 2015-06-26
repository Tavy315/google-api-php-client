<?php
/**
 * The "unsampledReports" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new Google_Service_Analytics(...);
 *   $unsampledReports = $analyticsService->unsampledReports;
 *  </code>
 */
class Google_Service_Analytics_ManagementUnsampledReports_Resource extends Google_Service_Resource
{
    /**
     * Returns a single unsampled report. (unsampledReports.get)
     *
     * @param string $accountId         Account ID to retrieve unsampled report for.
     * @param string $webPropertyId     Web property ID to retrieve unsampled reports
     *                                  for.
     * @param string $profileId         View (Profile) ID to retrieve unsampled report for.
     * @param string $unsampledReportId ID of the unsampled report to retrieve.
     * @param array  $optParams         Optional parameters.
     *
     * @return Google_Service_Analytics_UnsampledReport
     */
    public function get($accountId, $webPropertyId, $profileId, $unsampledReportId, $optParams = [ ])
    {
        $params = [
            'accountId'         => $accountId,
            'webPropertyId'     => $webPropertyId,
            'profileId'         => $profileId,
            'unsampledReportId' => $unsampledReportId,
        ];
        $params = array_merge($params, $optParams);

        return $this->call('get', [ $params ], 'Google_Service_Analytics_UnsampledReport');
    }

    /**
     * Create a new unsampled report. (unsampledReports.insert)
     *
     * @param string                                   $accountId     Account ID to create the unsampled report for.
     * @param string                                   $webPropertyId Web property ID to create the unsampled report
     *                                                                for.
     * @param string                                   $profileId     View (Profile) ID to create the unsampled report
     *                                                                for.
     * @param Google_Service_Analytics_UnsampledReport $postBody
     * @param array                                    $optParams     Optional parameters.
     *
     * @return Google_Service_Analytics_UnsampledReport
     */
    public function insert($accountId, $webPropertyId, $profileId, Google_Service_Analytics_UnsampledReport $postBody, $optParams = [ ])
    {
        $params = [
            'accountId'     => $accountId,
            'webPropertyId' => $webPropertyId,
            'profileId'     => $profileId,
            'postBody'      => $postBody,
        ];
        $params = array_merge($params, $optParams);

        return $this->call('insert', [ $params ], 'Google_Service_Analytics_UnsampledReport');
    }

    /**
     * Lists unsampled reports to which the user has access.
     * (unsampledReports.listManagementUnsampledReports)
     *
     * @param string $accountId     Account ID to retrieve unsampled reports for. Must
     *                              be a specific account ID, ~all is not supported.
     * @param string $webPropertyId Web property ID to retrieve unsampled reports
     *                              for. Must be a specific web property ID, ~all is not supported.
     * @param string $profileId     View (Profile) ID to retrieve unsampled reports for.
     *                              Must be a specific view (profile) ID, ~all is not supported.
     * @param array  $optParams     Optional parameters.
     *
     * @opt_param int max-results The maximum number of unsampled reports to include
     * in this response.
     * @opt_param int start-index An index of the first unsampled report to
     * retrieve. Use this parameter as a pagination mechanism along with the max-
     * results parameter.
     * @return Google_Service_Analytics_UnsampledReports
     */
    public function listManagementUnsampledReports($accountId, $webPropertyId, $profileId, $optParams = [ ])
    {
        $params = [
            'accountId'     => $accountId,
            'webPropertyId' => $webPropertyId,
            'profileId'     => $profileId,
        ];
        $params = array_merge($params, $optParams);

        return $this->call('list', [ $params ], 'Google_Service_Analytics_UnsampledReports');
    }
}
