<?php
class Google_Service_Analytics_FilterExpression extends Google_Model
{
    protected $internal_gapi_mappings = [ ];
    public $caseSensitive;
    public $expressionValue;
    public $field;
    public $kind;
    public $matchType;

    public function setCaseSensitive($caseSensitive)
    {
        $this->caseSensitive = $caseSensitive;
    }

    public function getCaseSensitive()
    {
        return $this->caseSensitive;
    }

    public function setExpressionValue($expressionValue)
    {
        $this->expressionValue = $expressionValue;
    }

    public function getExpressionValue()
    {
        return $this->expressionValue;
    }

    public function setField($field)
    {
        $this->field = $field;
    }

    public function getField()
    {
        return $this->field;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setMatchType($matchType)
    {
        $this->matchType = $matchType;
    }

    public function getMatchType()
    {
        return $this->matchType;
    }
}
