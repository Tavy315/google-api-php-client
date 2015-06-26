<?php
class Google_Service_Analytics_WebPropertySummary extends Google_Collection
{
    protected $collection_key = 'profiles';
    protected $internal_gapi_mappings = [ ];
    public $id;
    public $internalWebPropertyId;
    public $kind;
    public $level;
    public $name;
    protected $profilesType = 'Google_Service_Analytics_ProfileSummary';
    protected $profilesDataType = 'array';
    public $websiteUrl;

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setInternalWebPropertyId($internalWebPropertyId)
    {
        $this->internalWebPropertyId = $internalWebPropertyId;
    }

    public function getInternalWebPropertyId()
    {
        return $this->internalWebPropertyId;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setLevel($level)
    {
        $this->level = $level;
    }

    public function getLevel()
    {
        return $this->level;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setProfiles($profiles)
    {
        $this->profiles = $profiles;
    }

    public function getProfiles()
    {
        return $this->profiles;
    }

    public function setWebsiteUrl($websiteUrl)
    {
        $this->websiteUrl = $websiteUrl;
    }

    public function getWebsiteUrl()
    {
        return $this->websiteUrl;
    }
}
