<?php
/**
 * The "provisioning" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new Google_Service_Analytics(...);
 *   $provisioning = $analyticsService->provisioning;
 *  </code>
 */
class Google_Service_Analytics_Provisioning_Resource extends Google_Service_Resource
{
    /**
     * Creates an account ticket. (provisioning.createAccountTicket)
     *
     * @param Google_Service_Analytics_AccountTicket $postBody
     * @param array                                  $optParams Optional parameters.
     *
     * @return Google_Service_Analytics_AccountTicket
     */
    public function createAccountTicket(Google_Service_Analytics_AccountTicket $postBody, $optParams = [ ])
    {
        $params = [ 'postBody' => $postBody ];
        $params = array_merge($params, $optParams);

        return $this->call('createAccountTicket', [ $params ], 'Google_Service_Analytics_AccountTicket');
    }
}
