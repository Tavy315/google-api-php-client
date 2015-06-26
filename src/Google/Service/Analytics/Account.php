<?php
class Google_Service_Analytics_Account extends Google_Model
{
    protected $internal_gapi_mappings = [ ];
    protected $childLinkType = 'Google_Service_Analytics_AccountChildLink';
    protected $childLinkDataType = '';
    public $created;
    public $id;
    public $kind;
    public $name;
    protected $permissionsType = 'Google_Service_Analytics_AccountPermissions';
    protected $permissionsDataType = '';
    public $selfLink;
    public $updated;

    public function setChildLink(Google_Service_Analytics_AccountChildLink $childLink)
    {
        $this->childLink = $childLink;
    }

    public function getChildLink()
    {
        return $this->childLink;
    }

    public function setCreated($created)
    {
        $this->created = $created;
    }

    public function getCreated()
    {
        return $this->created;
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

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setPermissions(Google_Service_Analytics_AccountPermissions $permissions)
    {
        $this->permissions = $permissions;
    }

    public function getPermissions()
    {
        return $this->permissions;
    }

    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }

    public function getSelfLink()
    {
        return $this->selfLink;
    }

    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    public function getUpdated()
    {
        return $this->updated;
    }
}
