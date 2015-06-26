<?php
/**
 * The "webpropertyUserLinks" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new Google_Service_Analytics(...);
 *   $webpropertyUserLinks = $analyticsService->webpropertyUserLinks;
 *  </code>
 */
class Google_Service_Analytics_ManagementWebpropertyUserLinks_Resource extends Google_Service_Resource
{
    /**
     * Removes a user from the given web property. (webpropertyUserLinks.delete)
     *
     * @param string $accountId     Account ID to delete the user link for.
     * @param string $webPropertyId Web Property ID to delete the user link for.
     * @param string $linkId        Link ID to delete the user link for.
     * @param array  $optParams     Optional parameters.
     */
    public function delete($accountId, $webPropertyId, $linkId, $optParams = [ ])
    {
        $params = [ 'accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'linkId' => $linkId ];
        $params = array_merge($params, $optParams);

        return $this->call('delete', [ $params ]);
    }

    /**
     * Adds a new user to the given web property. (webpropertyUserLinks.insert)
     *
     * @param string                $accountId     Account ID to create the user link for.
     * @param string                $webPropertyId Web Property ID to create the user link for.
     * @param Google_EntityUserLink $postBody
     * @param array                 $optParams     Optional parameters.
     *
     * @return Google_Service_Analytics_EntityUserLink
     */
    public function insert($accountId, $webPropertyId, Google_Service_Analytics_EntityUserLink $postBody, $optParams = [ ])
    {
        $params = [ 'accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'postBody' => $postBody ];
        $params = array_merge($params, $optParams);

        return $this->call('insert', [ $params ], 'Google_Service_Analytics_EntityUserLink');
    }

    /**
     * Lists webProperty-user links for a given web property.
     * (webpropertyUserLinks.listManagementWebpropertyUserLinks)
     *
     * @param string $accountId     Account ID which the given web property belongs to.
     * @param string $webPropertyId Web Property ID for the webProperty-user links
     *                              to retrieve. Can either be a specific web property ID or '~all', which refers
     *                              to all the web properties that user has access to.
     * @param array  $optParams     Optional parameters.
     *
     * @opt_param int max-results The maximum number of webProperty-user Links to
     * include in this response.
     * @opt_param int start-index An index of the first webProperty-user link to
     * retrieve. Use this parameter as a pagination mechanism along with the max-
     * results parameter.
     * @return Google_Service_Analytics_EntityUserLinks
     */
    public function listManagementWebpropertyUserLinks($accountId, $webPropertyId, $optParams = [ ])
    {
        $params = [ 'accountId' => $accountId, 'webPropertyId' => $webPropertyId ];
        $params = array_merge($params, $optParams);

        return $this->call('list', [ $params ], 'Google_Service_Analytics_EntityUserLinks');
    }

    /**
     * Updates permissions for an existing user on the given web property.
     * (webpropertyUserLinks.update)
     *
     * @param string                $accountId     Account ID to update the account-user link for.
     * @param string                $webPropertyId Web property ID to update the account-user link
     *                                             for.
     * @param string                $linkId        Link ID to update the account-user link for.
     * @param Google_EntityUserLink $postBody
     * @param array                 $optParams     Optional parameters.
     *
     * @return Google_Service_Analytics_EntityUserLink
     */
    public function update($accountId, $webPropertyId, $linkId, Google_Service_Analytics_EntityUserLink $postBody, $optParams = [ ])
    {
        $params = [ 'accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'linkId' => $linkId, 'postBody' => $postBody ];
        $params = array_merge($params, $optParams);

        return $this->call('update', [ $params ], 'Google_Service_Analytics_EntityUserLink');
    }
}
