<?php
class Google_Service_Analytics_GoalVisitTimeOnSiteDetails extends Google_Model
{
    protected $internal_gapi_mappings = [ ];
    public $comparisonType;
    public $comparisonValue;

    public function setComparisonType($comparisonType)
    {
        $this->comparisonType = $comparisonType;
    }

    public function getComparisonType()
    {
        return $this->comparisonType;
    }

    public function setComparisonValue($comparisonValue)
    {
        $this->comparisonValue = $comparisonValue;
    }

    public function getComparisonValue()
    {
        return $this->comparisonValue;
    }
}
