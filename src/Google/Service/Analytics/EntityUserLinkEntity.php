<?php
class Google_Service_Analytics_EntityUserLinkEntity extends Google_Model
{
    protected $internal_gapi_mappings = [ ];
    protected $accountRefType = 'Google_Service_Analytics_AccountRef';
    protected $accountRefDataType = '';
    protected $profileRefType = 'Google_Service_Analytics_ProfileRef';
    protected $profileRefDataType = '';
    protected $webPropertyRefType = 'Google_Service_Analytics_WebPropertyRef';
    protected $webPropertyRefDataType = '';

    public function setAccountRef(Google_Service_Analytics_AccountRef $accountRef)
    {
        $this->accountRef = $accountRef;
    }

    public function getAccountRef()
    {
        return $this->accountRef;
    }

    public function setProfileRef(Google_Service_Analytics_ProfileRef $profileRef)
    {
        $this->profileRef = $profileRef;
    }

    public function getProfileRef()
    {
        return $this->profileRef;
    }

    public function setWebPropertyRef(Google_Service_Analytics_WebPropertyRef $webPropertyRef)
    {
        $this->webPropertyRef = $webPropertyRef;
    }

    public function getWebPropertyRef()
    {
        return $this->webPropertyRef;
    }
}
