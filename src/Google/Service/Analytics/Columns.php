<?php
class Google_Service_Analytics_Columns extends Google_Collection
{
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = [ ];
    public $attributeNames;
    public $etag;
    protected $itemsType = 'Google_Service_Analytics_Column';
    protected $itemsDataType = 'array';
    public $kind;
    public $totalResults;

    public function setAttributeNames($attributeNames)
    {
        $this->attributeNames = $attributeNames;
    }

    public function getAttributeNames()
    {
        return $this->attributeNames;
    }

    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    public function getEtag()
    {
        return $this->etag;
    }

    public function setItems($items)
    {
        $this->items = $items;
    }

    public function getItems()
    {
        return $this->items;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setTotalResults($totalResults)
    {
        $this->totalResults = $totalResults;
    }

    public function getTotalResults()
    {
        return $this->totalResults;
    }
}
