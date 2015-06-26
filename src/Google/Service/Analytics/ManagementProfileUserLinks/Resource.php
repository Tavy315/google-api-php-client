<?php
/**
 * The "profileUserLinks" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new Google_Service_Analytics(...);
 *   $profileUserLinks = $analyticsService->profileUserLinks;
 *  </code>
 */
class Google_Service_Analytics_ManagementProfileUserLinks_Resource extends Google_Service_Resource
{
    /**
     * Removes a user from the given view (profile). (profileUserLinks.delete)
     *
     * @param string $accountId     Account ID to delete the user link for.
     * @param string $webPropertyId Web Property ID to delete the user link for.
     * @param string $profileId     View (Profile) ID to delete the user link for.
     * @param string $linkId        Link ID to delete the user link for.
     * @param array  $optParams     Optional parameters.
     */
    public function delete($accountId, $webPropertyId, $profileId, $linkId, $optParams = [ ])
    {
        $params = [
            'accountId'     => $accountId,
            'webPropertyId' => $webPropertyId,
            'profileId'     => $profileId,
            'linkId'        => $linkId,
        ];
        $params = array_merge($params, $optParams);

        return $this->call('delete', [ $params ]);
    }

    /**
     * Adds a new user to the given view (profile). (profileUserLinks.insert)
     *
     * @param string                                  $accountId     Account ID to create the user link for.
     * @param string                                  $webPropertyId Web Property ID to create the user link for.
     * @param string                                  $profileId     View (Profile) ID to create the user link for.
     * @param Google_Service_Analytics_EntityUserLink $postBody
     * @param array                                   $optParams     Optional parameters.
     *
     * @return Google_Service_Analytics_EntityUserLink
     */
    public function insert($accountId, $webPropertyId, $profileId, Google_Service_Analytics_EntityUserLink $postBody, $optParams = [ ])
    {
        $params = [
            'accountId'     => $accountId,
            'webPropertyId' => $webPropertyId,
            'profileId'     => $profileId,
            'postBody'      => $postBody,
        ];
        $params = array_merge($params, $optParams);

        return $this->call('insert', [ $params ], 'Google_Service_Analytics_EntityUserLink');
    }

    /**
     * Lists profile-user links for a given view (profile).
     * (profileUserLinks.listManagementProfileUserLinks)
     *
     * @param string $accountId     Account ID which the given view (profile) belongs
     *                              to.
     * @param string $webPropertyId Web Property ID which the given view (profile)
     *                              belongs to. Can either be a specific web property ID or '~all', which refers
     *                              to all the web properties that user has access to.
     * @param string $profileId     View (Profile) ID to retrieve the profile-user links
     *                              for. Can either be a specific profile ID or '~all', which refers to all the
     *                              profiles that user has access to.
     * @param array  $optParams     Optional parameters.
     *
     * @opt_param int max-results The maximum number of profile-user links to
     * include in this response.
     * @opt_param int start-index An index of the first profile-user link to
     * retrieve. Use this parameter as a pagination mechanism along with the max-
     * results parameter.
     * @return Google_Service_Analytics_EntityUserLinks
     */
    public function listManagementProfileUserLinks($accountId, $webPropertyId, $profileId, $optParams = [ ])
    {
        $params = [
            'accountId'     => $accountId,
            'webPropertyId' => $webPropertyId,
            'profileId'     => $profileId,
        ];
        $params = array_merge($params, $optParams);

        return $this->call('list', [ $params ], 'Google_Service_Analytics_EntityUserLinks');
    }

    /**
     * Updates permissions for an existing user on the given view (profile).
     * (profileUserLinks.update)
     *
     * @param string                                  $accountId     Account ID to update the user link for.
     * @param string                                  $webPropertyId Web Property ID to update the user link for.
     * @param string                                  $profileId     View (Profile ID) to update the user link for.
     * @param string                                  $linkId        Link ID to update the user link for.
     * @param Google_Service_Analytics_EntityUserLink $postBody
     * @param array                                   $optParams     Optional parameters.
     *
     * @return Google_Service_Analytics_EntityUserLink
     */
    public function update($accountId, $webPropertyId, $profileId, $linkId, Google_Service_Analytics_EntityUserLink $postBody, $optParams = [ ])
    {
        $params = [
            'accountId'     => $accountId,
            'webPropertyId' => $webPropertyId,
            'profileId'     => $profileId,
            'linkId'        => $linkId,
            'postBody'      => $postBody,
        ];
        $params = array_merge($params, $optParams);

        return $this->call('update', [ $params ], 'Google_Service_Analytics_EntityUserLink');
    }
}
