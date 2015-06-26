<?php
class Google_Service_Analytics_EntityUserLink extends Google_Model
{
    protected $internal_gapi_mappings = [ ];
    protected $entityType = 'Google_Service_Analytics_EntityUserLinkEntity';
    protected $entityDataType = '';
    public $id;
    public $kind;
    protected $permissionsType = 'Google_Service_Analytics_EntityUserLinkPermissions';
    protected $permissionsDataType = '';
    public $selfLink;
    protected $userRefType = 'Google_Service_Analytics_UserRef';
    protected $userRefDataType = '';

    public function setEntity(Google_Service_Analytics_EntityUserLinkEntity $entity)
    {
        $this->entity = $entity;
    }

    public function getEntity()
    {
        return $this->entity;
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

    public function setPermissions(Google_Service_Analytics_EntityUserLinkPermissions $permissions)
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

    public function setUserRef(Google_Service_Analytics_UserRef $userRef)
    {
        $this->userRef = $userRef;
    }

    public function getUserRef()
    {
        return $this->userRef;
    }
}
