<?php
class Google_Service_Analytics_McfDataRowsConversionPathValue extends Google_Model
{
    protected $internal_gapi_mappings = [ ];
    public $interactionType;
    public $nodeValue;

    public function setInteractionType($interactionType)
    {
        $this->interactionType = $interactionType;
    }

    public function getInteractionType()
    {
        return $this->interactionType;
    }

    public function setNodeValue($nodeValue)
    {
        $this->nodeValue = $nodeValue;
    }

    public function getNodeValue()
    {
        return $this->nodeValue;
    }
}
