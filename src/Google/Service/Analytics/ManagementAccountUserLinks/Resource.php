<?php
/**
 * The "accountUserLinks" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new Google_Service_Analytics(...);
 *   $accountUserLinks = $analyticsService->accountUserLinks;
 *  </code>
 */
class Google_Service_Analytics_ManagementAccountUserLinks_Resource extends Google_Service_Resource
{
    /**
     * Removes a user from the given account. (accountUserLinks.delete)
     *
     * @param string $accountId Account ID to delete the user link for.
     * @param string $linkId    Link ID to delete the user link for.
     * @param array  $optParams Optional parameters.
     */
    public function delete($accountId, $linkId, $optParams = [ ])
    {
        $params = [
            'accountId' => $accountId,
            'linkId'    => $linkId,
        ];
        $params = array_merge($params, $optParams);

        return $this->call('delete', [ $params ]);
    }

    /**
     * Adds a new user to the given account. (accountUserLinks.insert)
     *
     * @param string                                  $accountId Account ID to create the user link for.
     * @param Google_Service_Analytics_EntityUserLink $postBody
     * @param array                                   $optParams Optional parameters.
     *
     * @return Google_Service_Analytics_EntityUserLink
     */
    public function insert($accountId, Google_Service_Analytics_EntityUserLink $postBody, $optParams = [ ])
    {
        $params = [
            'accountId' => $accountId,
            'postBody'  => $postBody,
        ];
        $params = array_merge($params, $optParams);

        return $this->call('insert', [ $params ], 'Google_Service_Analytics_EntityUserLink');
    }

    /**
     * Lists account-user links for a given account.
     * (accountUserLinks.listManagementAccountUserLinks)
     *
     * @param string $accountId Account ID to retrieve the user links for.
     * @param array  $optParams Optional parameters.
     *
     * @opt_param int max-results The maximum number of account-user links to
     * include in this response.
     * @opt_param int start-index An index of the first account-user link to
     * retrieve. Use this parameter as a pagination mechanism along with the max-
     * results parameter.
     * @return Google_Service_Analytics_EntityUserLinks
     */
    public function listManagementAccountUserLinks($accountId, $optParams = [ ])
    {
        $params = [
            'accountId' => $accountId,
        ];
        $params = array_merge($params, $optParams);

        return $this->call('list', [ $params ], 'Google_Service_Analytics_EntityUserLinks');
    }

    /**
     * Updates permissions for an existing user on the given account.
     * (accountUserLinks.update)
     *
     * @param string                                  $accountId Account ID to update the account-user link for.
     * @param string                                  $linkId    Link ID to update the account-user link for.
     * @param Google_Service_Analytics_EntityUserLink $postBody
     * @param array                                   $optParams Optional parameters.
     *
     * @return Google_Service_Analytics_EntityUserLink
     */
    public function update($accountId, $linkId, Google_Service_Analytics_EntityUserLink $postBody, $optParams = [ ])
    {
        $params = [
            'accountId' => $accountId,
            'linkId'    => $linkId,
            'postBody'  => $postBody,
        ];
        $params = array_merge($params, $optParams);

        return $this->call('update', [ $params ], 'Google_Service_Analytics_EntityUserLink');
    }
}
