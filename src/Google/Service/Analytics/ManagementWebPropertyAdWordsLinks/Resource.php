<?php
/**
 * The "webPropertyAdWordsLinks" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new Google_Service_Analytics(...);
 *   $webPropertyAdWordsLinks = $analyticsService->webPropertyAdWordsLinks;
 *  </code>
 */
class Google_Service_Analytics_ManagementWebPropertyAdWordsLinks_Resource extends Google_Service_Resource
{
    /**
     * Deletes a web property-AdWords link. (webPropertyAdWordsLinks.delete)
     *
     * @param string $accountId                ID of the account which the given web property
     *                                         belongs to.
     * @param string $webPropertyId            Web property ID to delete the AdWords link for.
     * @param string $webPropertyAdWordsLinkId Web property AdWords link ID.
     * @param array  $optParams                Optional parameters.
     */
    public function delete($accountId, $webPropertyId, $webPropertyAdWordsLinkId, $optParams = [ ])
    {
        $params = [ 'accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'webPropertyAdWordsLinkId' => $webPropertyAdWordsLinkId ];
        $params = array_merge($params, $optParams);

        return $this->call('delete', [ $params ]);
    }

    /**
     * Returns a web property-AdWords link to which the user has access.
     * (webPropertyAdWordsLinks.get)
     *
     * @param string $accountId                ID of the account which the given web property
     *                                         belongs to.
     * @param string $webPropertyId            Web property ID to retrieve the AdWords link
     *                                         for.
     * @param string $webPropertyAdWordsLinkId Web property-AdWords link ID.
     * @param array  $optParams                Optional parameters.
     *
     * @return Google_Service_Analytics_EntityAdWordsLink
     */
    public function get($accountId, $webPropertyId, $webPropertyAdWordsLinkId, $optParams = [ ])
    {
        $params = [ 'accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'webPropertyAdWordsLinkId' => $webPropertyAdWordsLinkId ];
        $params = array_merge($params, $optParams);

        return $this->call('get', [ $params ], 'Google_Service_Analytics_EntityAdWordsLink');
    }

    /**
     * Creates a webProperty-AdWords link. (webPropertyAdWordsLinks.insert)
     *
     * @param string                   $accountId     ID of the Google Analytics account to create the
     *                                                link for.
     * @param string                   $webPropertyId Web property ID to create the link for.
     * @param Google_EntityAdWordsLink $postBody
     * @param array                    $optParams     Optional parameters.
     *
     * @return Google_Service_Analytics_EntityAdWordsLink
     */
    public function insert($accountId, $webPropertyId, Google_Service_Analytics_EntityAdWordsLink $postBody, $optParams = [ ])
    {
        $params = [ 'accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'postBody' => $postBody ];
        $params = array_merge($params, $optParams);

        return $this->call('insert', [ $params ], 'Google_Service_Analytics_EntityAdWordsLink');
    }

    /**
     * Lists webProperty-AdWords links for a given web property.
     * (webPropertyAdWordsLinks.listManagementWebPropertyAdWordsLinks)
     *
     * @param string $accountId     ID of the account which the given web property
     *                              belongs to.
     * @param string $webPropertyId Web property ID to retrieve the AdWords links
     *                              for.
     * @param array  $optParams     Optional parameters.
     *
     * @opt_param int max-results The maximum number of webProperty-AdWords links to
     * include in this response.
     * @opt_param int start-index An index of the first webProperty-AdWords link to
     * retrieve. Use this parameter as a pagination mechanism along with the max-
     * results parameter.
     * @return Google_Service_Analytics_EntityAdWordsLinks
     */
    public function listManagementWebPropertyAdWordsLinks($accountId, $webPropertyId, $optParams = [ ])
    {
        $params = [ 'accountId' => $accountId, 'webPropertyId' => $webPropertyId ];
        $params = array_merge($params, $optParams);

        return $this->call('list', [ $params ], 'Google_Service_Analytics_EntityAdWordsLinks');
    }

    /**
     * Updates an existing webProperty-AdWords link. This method supports patch
     * semantics. (webPropertyAdWordsLinks.patch)
     *
     * @param string                   $accountId                ID of the account which the given web property
     *                                                           belongs to.
     * @param string                   $webPropertyId            Web property ID to retrieve the AdWords link
     *                                                           for.
     * @param string                   $webPropertyAdWordsLinkId Web property-AdWords link ID.
     * @param Google_EntityAdWordsLink $postBody
     * @param array                    $optParams                Optional parameters.
     *
     * @return Google_Service_Analytics_EntityAdWordsLink
     */
    public function patch($accountId, $webPropertyId, $webPropertyAdWordsLinkId, Google_Service_Analytics_EntityAdWordsLink $postBody, $optParams = [ ])
    {
        $params = [ 'accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'webPropertyAdWordsLinkId' => $webPropertyAdWordsLinkId, 'postBody' => $postBody ];
        $params = array_merge($params, $optParams);

        return $this->call('patch', [ $params ], 'Google_Service_Analytics_EntityAdWordsLink');
    }

    /**
     * Updates an existing webProperty-AdWords link.
     * (webPropertyAdWordsLinks.update)
     *
     * @param string                   $accountId                ID of the account which the given web property
     *                                                           belongs to.
     * @param string                   $webPropertyId            Web property ID to retrieve the AdWords link
     *                                                           for.
     * @param string                   $webPropertyAdWordsLinkId Web property-AdWords link ID.
     * @param Google_EntityAdWordsLink $postBody
     * @param array                    $optParams                Optional parameters.
     *
     * @return Google_Service_Analytics_EntityAdWordsLink
     */
    public function update($accountId, $webPropertyId, $webPropertyAdWordsLinkId, Google_Service_Analytics_EntityAdWordsLink $postBody, $optParams = [ ])
    {
        $params = [ 'accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'webPropertyAdWordsLinkId' => $webPropertyAdWordsLinkId, 'postBody' => $postBody ];
        $params = array_merge($params, $optParams);

        return $this->call('update', [ $params ], 'Google_Service_Analytics_EntityAdWordsLink');
    }
}
