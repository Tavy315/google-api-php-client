<?php
class Google_Service_Analytics_AdWordsAccount extends Google_Model
{
    protected $internal_gapi_mappings = [ ];
    public $autoTaggingEnabled;
    public $customerId;
    public $kind;

    public function setAutoTaggingEnabled($autoTaggingEnabled)
    {
        $this->autoTaggingEnabled = $autoTaggingEnabled;
    }

    public function getAutoTaggingEnabled()
    {
        return $this->autoTaggingEnabled;
    }

    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;
    }

    public function getCustomerId()
    {
        return $this->customerId;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }
}
