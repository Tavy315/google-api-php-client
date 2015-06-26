<?php
class Google_Service_Analytics_GoalUrlDestinationDetails extends Google_Collection
{
    protected $collection_key = 'steps';
    protected $internal_gapi_mappings = [ ];
    public $caseSensitive;
    public $firstStepRequired;
    public $matchType;
    protected $stepsType = 'Google_Service_Analytics_GoalUrlDestinationDetailsSteps';
    protected $stepsDataType = 'array';
    public $url;

    public function setCaseSensitive($caseSensitive)
    {
        $this->caseSensitive = $caseSensitive;
    }

    public function getCaseSensitive()
    {
        return $this->caseSensitive;
    }

    public function setFirstStepRequired($firstStepRequired)
    {
        $this->firstStepRequired = $firstStepRequired;
    }

    public function getFirstStepRequired()
    {
        return $this->firstStepRequired;
    }

    public function setMatchType($matchType)
    {
        $this->matchType = $matchType;
    }

    public function getMatchType()
    {
        return $this->matchType;
    }

    public function setSteps($steps)
    {
        $this->steps = $steps;
    }

    public function getSteps()
    {
        return $this->steps;
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }

    public function getUrl()
    {
        return $this->url;
    }
}
