<?php
/**
 * The "columns" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new Google_Service_Analytics(...);
 *   $columns = $analyticsService->columns;
 *  </code>
 */
class Google_Service_Analytics_MetadataColumns_Resource extends Google_Service_Resource
{
    /**
     * Lists all columns for a report type (columns.listMetadataColumns)
     *
     * @param string $reportType Report type. Allowed Values: 'ga'. Where 'ga'
     *                           corresponds to the Core Reporting API
     * @param array  $optParams  Optional parameters.
     *
     * @return Google_Service_Analytics_Columns
     */
    public function listMetadataColumns($reportType, $optParams = [ ])
    {
        $params = [ 'reportType' => $reportType ];
        $params = array_merge($params, $optParams);

        return $this->call('list', [ $params ], 'Google_Service_Analytics_Columns');
    }
}
