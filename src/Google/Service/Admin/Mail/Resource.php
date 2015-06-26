<?php
/**
 * The "mail" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adminService = new Google_Service_Admin(...);
 *   $mail = $adminService->mail;
 *  </code>
 */
class Google_Service_Admin_Mail_Resource extends Google_Service_Resource
{
    /**
     * Insert Mail into Google's Gmail backends (mail.insert)
     *
     * @param string                        $userKey   The email or immutable id of the user
     * @param Google_Service_Admin_MailItem $postBody
     * @param array                         $optParams Optional parameters.
     *
     * @return mixed
     */
    public function insert($userKey, Google_Service_Admin_MailItem $postBody, $optParams = [ ])
    {
        $params = [ 'userKey' => $userKey, 'postBody' => $postBody ];
        $params = array_merge($params, $optParams);

        return $this->call('insert', [ $params ]);
    }
}
