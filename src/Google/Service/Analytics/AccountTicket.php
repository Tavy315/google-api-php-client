<?php
class Google_Service_Analytics_AccountTicket extends Google_Model
{
    protected $internal_gapi_mappings = [ ];
    protected $accountType = 'Google_Service_Analytics_Account';
    protected $accountDataType = '';
    public $id;
    public $kind;
    protected $profileType = 'Google_Service_Analytics_Profile';
    protected $profileDataType = '';
    public $redirectUri;
    protected $webpropertyType = 'Google_Service_Analytics_Webproperty';
    protected $webpropertyDataType = '';

    public function setAccount(Google_Service_Analytics_Account $account)
    {
        $this->account = $account;
    }

    public function getAccount()
    {
        return $this->account;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setProfile(Google_Service_Analytics_Profile $profile)
    {
        $this->profile = $profile;
    }

    public function getProfile()
    {
        return $this->profile;
    }

    public function setRedirectUri($redirectUri)
    {
        $this->redirectUri = $redirectUri;
    }

    public function getRedirectUri()
    {
        return $this->redirectUri;
    }

    public function setWebproperty(Google_Service_Analytics_Webproperty $webproperty)
    {
        $this->webproperty = $webproperty;
    }

    public function getWebproperty()
    {
        return $this->webproperty;
    }
}
