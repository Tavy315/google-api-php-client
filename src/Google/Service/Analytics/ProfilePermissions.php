<?php
class Google_Service_Analytics_ProfilePermissions extends Google_Collection
{
    protected $collection_key = 'effective';
    protected $internal_gapi_mappings = [ ];
    public $effective;

    public function setEffective($effective)
    {
        $this->effective = $effective;
    }

    public function getEffective()
    {
        return $this->effective;
    }
}
