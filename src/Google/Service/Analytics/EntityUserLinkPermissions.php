<?php
class Google_Service_Analytics_EntityUserLinkPermissions extends Google_Collection
{
    protected $collection_key = 'local';
    protected $internal_gapi_mappings = [ ];
    public $effective;
    public $local;

    public function setEffective($effective)
    {
        $this->effective = $effective;
    }

    public function getEffective()
    {
        return $this->effective;
    }

    public function setLocal($local)
    {
        $this->local = $local;
    }

    public function getLocal()
    {
        return $this->local;
    }
}
