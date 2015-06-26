<?php
class Google_Service_Analytics_FilterSearchAndReplaceDetails extends Google_Model
{
    protected $internal_gapi_mappings = [ ];
    public $caseSensitive;
    public $field;
    public $replaceString;
    public $searchString;

    public function setCaseSensitive($caseSensitive)
    {
        $this->caseSensitive = $caseSensitive;
    }

    public function getCaseSensitive()
    {
        return $this->caseSensitive;
    }

    public function setField($field)
    {
        $this->field = $field;
    }

    public function getField()
    {
        return $this->field;
    }

    public function setReplaceString($replaceString)
    {
        $this->replaceString = $replaceString;
    }

    public function getReplaceString()
    {
        return $this->replaceString;
    }

    public function setSearchString($searchString)
    {
        $this->searchString = $searchString;
    }

    public function getSearchString()
    {
        return $this->searchString;
    }
}
