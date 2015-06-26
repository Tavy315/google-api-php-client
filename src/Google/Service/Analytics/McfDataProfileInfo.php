<?php
class Google_Service_Analytics_McfDataProfileInfo extends Google_Model
{
    protected $internal_gapi_mappings = [ ];
    public $accountId;
    public $internalWebPropertyId;
    public $profileId;
    public $profileName;
    public $tableId;
    public $webPropertyId;

    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;
    }

    public function getAccountId()
    {
        return $this->accountId;
    }

    public function setInternalWebPropertyId($internalWebPropertyId)
    {
        $this->internalWebPropertyId = $internalWebPropertyId;
    }

    public function getInternalWebPropertyId()
    {
        return $this->internalWebPropertyId;
    }

    public function setProfileId($profileId)
    {
        $this->profileId = $profileId;
    }

    public function getProfileId()
    {
        return $this->profileId;
    }

    public function setProfileName($profileName)
    {
        $this->profileName = $profileName;
    }

    public function getProfileName()
    {
        return $this->profileName;
    }

    public function setTableId($tableId)
    {
        $this->tableId = $tableId;
    }

    public function getTableId()
    {
        return $this->tableId;
    }

    public function setWebPropertyId($webPropertyId)
    {
        $this->webPropertyId = $webPropertyId;
    }

    public function getWebPropertyId()
    {
        return $this->webPropertyId;
    }
}
