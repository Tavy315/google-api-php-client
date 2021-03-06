<?php
class Google_Service_Analytics_GoalParentLink extends Google_Model
{
    protected $internal_gapi_mappings = [ ];
    public $href;
    public $type;

    public function setHref($href)
    {
        $this->href = $href;
    }

    public function getHref()
    {
        return $this->href;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }
}
