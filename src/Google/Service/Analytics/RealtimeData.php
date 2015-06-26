<?php
class Google_Service_Analytics_RealtimeData extends Google_Collection
{
    protected $collection_key = 'rows';
    protected $internal_gapi_mappings = [ ];
    protected $columnHeadersType = 'Google_Service_Analytics_RealtimeDataColumnHeaders';
    protected $columnHeadersDataType = 'array';
    public $id;
    public $kind;
    protected $profileInfoType = 'Google_Service_Analytics_RealtimeDataProfileInfo';
    protected $profileInfoDataType = '';
    protected $queryType = 'Google_Service_Analytics_RealtimeDataQuery';
    protected $queryDataType = '';
    public $rows;
    public $selfLink;
    public $totalResults;
    public $totalsForAllResults;

    public function setColumnHeaders($columnHeaders)
    {
        $this->columnHeaders = $columnHeaders;
    }

    public function getColumnHeaders()
    {
        return $this->columnHeaders;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setProfileInfo(Google_Service_Analytics_RealtimeDataProfileInfo $profileInfo)
    {
        $this->profileInfo = $profileInfo;
    }

    public function getProfileInfo()
    {
        return $this->profileInfo;
    }

    public function setQuery(Google_Service_Analytics_RealtimeDataQuery $query)
    {
        $this->query = $query;
    }

    public function getQuery()
    {
        return $this->query;
    }

    public function setRows($rows)
    {
        $this->rows = $rows;
    }

    public function getRows()
    {
        return $this->rows;
    }

    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }

    public function getSelfLink()
    {
        return $this->selfLink;
    }

    public function setTotalResults($totalResults)
    {
        $this->totalResults = $totalResults;
    }

    public function getTotalResults()
    {
        return $this->totalResults;
    }

    public function setTotalsForAllResults($totalsForAllResults)
    {
        $this->totalsForAllResults = $totalsForAllResults;
    }

    public function getTotalsForAllResults()
    {
        return $this->totalsForAllResults;
    }
}
