<?php
/**
 * The "accounts" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new Google_Service_Analytics(...);
 *   $accounts = $analyticsService->accounts;
 *  </code>
 */
class Google_Service_Analytics_ManagementAccounts_Resource extends Google_Service_Resource
{
    /**
     * Lists all accounts to which the user has access.
     * (accounts.listManagementAccounts)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param int max-results The maximum number of accounts to include in this
     * response.
     * @opt_param int start-index An index of the first account to retrieve. Use
     * this parameter as a pagination mechanism along with the max-results
     * parameter.
     * @return Google_Service_Analytics_Accounts
     */
    public function listManagementAccounts($optParams = [ ])
    {
        $params = [ ];
        $params = array_merge($params, $optParams);

        return $this->call('list', [ $params ], 'Google_Service_Analytics_Accounts');
    }
}
