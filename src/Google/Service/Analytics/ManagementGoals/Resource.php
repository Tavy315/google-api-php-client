<?php
/**
 * The "goals" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new Google_Service_Analytics(...);
 *   $goals = $analyticsService->goals;
 *  </code>
 */
class Google_Service_Analytics_ManagementGoals_Resource extends Google_Service_Resource
{
    /**
     * Gets a goal to which the user has access. (goals.get)
     *
     * @param string $accountId     Account ID to retrieve the goal for.
     * @param string $webPropertyId Web property ID to retrieve the goal for.
     * @param string $profileId     View (Profile) ID to retrieve the goal for.
     * @param string $goalId        Goal ID to retrieve the goal for.
     * @param array  $optParams     Optional parameters.
     *
     * @return Google_Service_Analytics_Goal
     */
    public function get($accountId, $webPropertyId, $profileId, $goalId, $optParams = [ ])
    {
        $params = [
            'accountId'     => $accountId,
            'webPropertyId' => $webPropertyId,
            'profileId'     => $profileId,
            'goalId'        => $goalId,
        ];
        $params = array_merge($params, $optParams);

        return $this->call('get', [ $params ], 'Google_Service_Analytics_Goal');
    }

    /**
     * Create a new goal. (goals.insert)
     *
     * @param string      $accountId     Account ID to create the goal for.
     * @param string      $webPropertyId Web property ID to create the goal for.
     * @param string      $profileId     View (Profile) ID to create the goal for.
     * @param Google_Goal $postBody
     * @param array       $optParams     Optional parameters.
     *
     * @return Google_Service_Analytics_Goal
     */
    public function insert($accountId, $webPropertyId, $profileId, Google_Service_Analytics_Goal $postBody, $optParams = [ ])
    {
        $params = [
            'accountId'     => $accountId,
            'webPropertyId' => $webPropertyId,
            'profileId'     => $profileId,
            'postBody'      => $postBody,
        ];
        $params = array_merge($params, $optParams);

        return $this->call('insert', [ $params ], 'Google_Service_Analytics_Goal');
    }

    /**
     * Lists goals to which the user has access. (goals.listManagementGoals)
     *
     * @param string $accountId     Account ID to retrieve goals for. Can either be a
     *                              specific account ID or '~all', which refers to all the accounts that user has
     *                              access to.
     * @param string $webPropertyId Web property ID to retrieve goals for. Can
     *                              either be a specific web property ID or '~all', which refers to all the web
     *                              properties that user has access to.
     * @param string $profileId     View (Profile) ID to retrieve goals for. Can either
     *                              be a specific view (profile) ID or '~all', which refers to all the views
     *                              (profiles) that user has access to.
     * @param array  $optParams     Optional parameters.
     *
     * @opt_param int max-results The maximum number of goals to include in this
     * response.
     * @opt_param int start-index An index of the first goal to retrieve. Use this
     * parameter as a pagination mechanism along with the max-results parameter.
     * @return Google_Service_Analytics_Goals
     */
    public function listManagementGoals($accountId, $webPropertyId, $profileId, $optParams = [ ])
    {
        $params = [
            'accountId'     => $accountId,
            'webPropertyId' => $webPropertyId,
            'profileId'     => $profileId,
        ];
        $params = array_merge($params, $optParams);

        return $this->call('list', [ $params ], 'Google_Service_Analytics_Goals');
    }

    /**
     * Updates an existing view (profile). This method supports patch semantics.
     * (goals.patch)
     *
     * @param string                        $accountId     Account ID to update the goal.
     * @param string                        $webPropertyId Web property ID to update the goal.
     * @param string                        $profileId     View (Profile) ID to update the goal.
     * @param string                        $goalId        Index of the goal to be updated.
     * @param Google_Service_Analytics_Goal $postBody
     * @param array                         $optParams     Optional parameters.
     *
     * @return Google_Service_Analytics_Goal
     */
    public function patch($accountId, $webPropertyId, $profileId, $goalId, Google_Service_Analytics_Goal $postBody, $optParams = [ ])
    {
        $params = [
            'accountId'     => $accountId,
            'webPropertyId' => $webPropertyId,
            'profileId'     => $profileId,
            'goalId'        => $goalId,
            'postBody'      => $postBody,
        ];
        $params = array_merge($params, $optParams);

        return $this->call('patch', [ $params ], 'Google_Service_Analytics_Goal');
    }

    /**
     * Updates an existing view (profile). (goals.update)
     *
     * @param string                        $accountId     Account ID to update the goal.
     * @param string                        $webPropertyId Web property ID to update the goal.
     * @param string                        $profileId     View (Profile) ID to update the goal.
     * @param string                        $goalId        Index of the goal to be updated.
     * @param Google_Service_Analytics_Goal $postBody
     * @param array                         $optParams     Optional parameters.
     *
     * @return Google_Service_Analytics_Goal
     */
    public function update($accountId, $webPropertyId, $profileId, $goalId, Google_Service_Analytics_Goal $postBody, $optParams = [ ])
    {
        $params = [
            'accountId'     => $accountId,
            'webPropertyId' => $webPropertyId,
            'profileId'     => $profileId,
            'goalId'        => $goalId,
            'postBody'      => $postBody,
        ];
        $params = array_merge($params, $optParams);

        return $this->call('update', [ $params ], 'Google_Service_Analytics_Goal');
    }
}
