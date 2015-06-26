<?php
class Google_Service_Analytics_McfDataRows extends Google_Collection
{
    protected $collection_key = 'conversionPathValue';
    protected $internal_gapi_mappings = [ ];
    protected $conversionPathValueType = 'Google_Service_Analytics_McfDataRowsConversionPathValue';
    protected $conversionPathValueDataType = 'array';
    public $primitiveValue;

    public function setConversionPathValue($conversionPathValue)
    {
        $this->conversionPathValue = $conversionPathValue;
    }

    public function getConversionPathValue()
    {
        return $this->conversionPathValue;
    }

    public function setPrimitiveValue($primitiveValue)
    {
        $this->primitiveValue = $primitiveValue;
    }

    public function getPrimitiveValue()
    {
        return $this->primitiveValue;
    }
}
