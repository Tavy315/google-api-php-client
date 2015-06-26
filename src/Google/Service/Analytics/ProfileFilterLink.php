<?php
class Google_Service_Analytics_ProfileFilterLink extends Google_Model
{
    protected $internal_gapi_mappings = [ ];
    protected $filterRefType = 'Google_Service_Analytics_FilterRef';
    protected $filterRefDataType = '';
    public $id;
    public $kind;
    protected $profileRefType = 'Google_Service_Analytics_ProfileRef';
    protected $profileRefDataType = '';
    public $rank;
    public $selfLink;

    public function setFilterRef(Google_Service_Analytics_FilterRef $filterRef)
    {
        $this->filterRef = $filterRef;
    }

    public function getFilterRef()
    {
        return $this->filterRef;
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

    public function setProfileRef(Google_Service_Analytics_ProfileRef $profileRef)
    {
        $this->profileRef = $profileRef;
    }

    public function getProfileRef()
    {
        return $this->profileRef;
    }

    public function setRank($rank)
    {
        $this->rank = $rank;
    }

    public function getRank()
    {
        return $this->rank;
    }

    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }

    public function getSelfLink()
    {
        return $this->selfLink;
    }
}
