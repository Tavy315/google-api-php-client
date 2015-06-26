<?php
/**
 * The "uploads" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new Google_Service_Analytics(...);
 *   $uploads = $analyticsService->uploads;
 *  </code>
 */
class Google_Service_Analytics_ManagementUploads_Resource extends Google_Service_Resource
{
    /**
     * Delete data associated with a previous upload. (uploads.deleteUploadData)
     *
     * @param string                                            $accountId          Account Id for the uploads to be deleted.
     * @param string                                            $webPropertyId      Web property Id for the uploads to be deleted.
     * @param string                                            $customDataSourceId Custom data source Id for the uploads to be
     *                                                                              deleted.
     * @param Google_AnalyticsDataimportDeleteUploadDataRequest $postBody
     * @param array                                             $optParams          Optional parameters.
     */
    public function deleteUploadData($accountId, $webPropertyId, $customDataSourceId, Google_Service_Analytics_AnalyticsDataimportDeleteUploadDataRequest $postBody, $optParams = [ ])
    {
        $params = [
            'accountId'          => $accountId,
            'webPropertyId'      => $webPropertyId,
            'customDataSourceId' => $customDataSourceId,
            'postBody'           => $postBody,
        ];
        $params = array_merge($params, $optParams);

        return $this->call('deleteUploadData', [ $params ]);
    }

    /**
     * List uploads to which the user has access. (uploads.get)
     *
     * @param string $accountId          Account Id for the upload to retrieve.
     * @param string $webPropertyId      Web property Id for the upload to retrieve.
     * @param string $customDataSourceId Custom data source Id for upload to
     *                                   retrieve.
     * @param string $uploadId           Upload Id to retrieve.
     * @param array  $optParams          Optional parameters.
     *
     * @return Google_Service_Analytics_Upload
     */
    public function get($accountId, $webPropertyId, $customDataSourceId, $uploadId, $optParams = [ ])
    {
        $params = [
            'accountId'          => $accountId,
            'webPropertyId'      => $webPropertyId,
            'customDataSourceId' => $customDataSourceId,
            'uploadId'           => $uploadId,
        ];
        $params = array_merge($params, $optParams);

        return $this->call('get', [ $params ], 'Google_Service_Analytics_Upload');
    }

    /**
     * List uploads to which the user has access. (uploads.listManagementUploads)
     *
     * @param string $accountId          Account Id for the uploads to retrieve.
     * @param string $webPropertyId      Web property Id for the uploads to retrieve.
     * @param string $customDataSourceId Custom data source Id for uploads to
     *                                   retrieve.
     * @param array  $optParams          Optional parameters.
     *
     * @opt_param int max-results The maximum number of uploads to include in this
     * response.
     * @opt_param int start-index A 1-based index of the first upload to retrieve.
     * Use this parameter as a pagination mechanism along with the max-results
     * parameter.
     * @return Google_Service_Analytics_Uploads
     */
    public function listManagementUploads($accountId, $webPropertyId, $customDataSourceId, $optParams = [ ])
    {
        $params = [
            'accountId'          => $accountId,
            'webPropertyId'      => $webPropertyId,
            'customDataSourceId' => $customDataSourceId,
        ];
        $params = array_merge($params, $optParams);

        return $this->call('list', [ $params ], 'Google_Service_Analytics_Uploads');
    }

    /**
     * Upload data for a custom data source. (uploads.uploadData)
     *
     * @param string $accountId          Account Id associated with the upload.
     * @param string $webPropertyId      Web property UA-string associated with the
     *                                   upload.
     * @param string $customDataSourceId Custom data source Id to which the data
     *                                   being uploaded belongs.
     * @param array  $optParams          Optional parameters.
     *
     * @return Google_Service_Analytics_Upload
     */
    public function uploadData($accountId, $webPropertyId, $customDataSourceId, $optParams = [ ])
    {
        $params = [
            'accountId'          => $accountId,
            'webPropertyId'      => $webPropertyId,
            'customDataSourceId' => $customDataSourceId,
        ];
        $params = array_merge($params, $optParams);

        return $this->call('uploadData', [ $params ], 'Google_Service_Analytics_Upload');
    }
}
