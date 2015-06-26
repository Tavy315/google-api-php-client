<?php
class Google_Service_Analytics_GaData extends Google_Collection
{
    protected $collection_key = 'rows';
    protected $internal_gapi_mappings = [ ];
    protected $columnHeadersType = 'Google_Service_Analytics_GaDataColumnHeaders';
    protected $columnHeadersDataType = 'array';
    public $containsSampledData;
    protected $dataTableType = 'Google_Service_Analytics_GaDataDataTable';
    protected $dataTableDataType = '';
    public $id;
    public $itemsPerPage;
    public $kind;
    public $nextLink;
    public $previousLink;
    protected $profileInfoType = 'Google_Service_Analytics_GaDataProfileInfo';
    protected $profileInfoDataType = '';
    protected $queryType = 'Google_Service_Analytics_GaDataQuery';
    protected $queryDataType = '';
    public $rows;
    public $sampleSize;
    public $sampleSpace;
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

    public function setContainsSampledData($containsSampledData)
    {
        $this->containsSampledData = $containsSampledData;
    }

    public function getContainsSampledData()
    {
        return $this->containsSampledData;
    }

    public function setDataTable(Google_Service_Analytics_GaDataDataTable $dataTable)
    {
        $this->dataTable = $dataTable;
    }

    public function getDataTable()
    {
        return $this->dataTable;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setItemsPerPage($itemsPerPage)
    {
        $this->itemsPerPage = $itemsPerPage;
    }

    public function getItemsPerPage()
    {
        return $this->itemsPerPage;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setNextLink($nextLink)
    {
        $this->nextLink = $nextLink;
    }

    public function getNextLink()
    {
        return $this->nextLink;
    }

    public function setPreviousLink($previousLink)
    {
        $this->previousLink = $previousLink;
    }

    public function getPreviousLink()
    {
        return $this->previousLink;
    }

    public function setProfileInfo(Google_Service_Analytics_GaDataProfileInfo $profileInfo)
    {
        $this->profileInfo = $profileInfo;
    }

    public function getProfileInfo()
    {
        return $this->profileInfo;
    }

    public function setQuery(Google_Service_Analytics_GaDataQuery $query)
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

    public function setSampleSize($sampleSize)
    {
        $this->sampleSize = $sampleSize;
    }

    public function getSampleSize()
    {
        return $this->sampleSize;
    }

    public function setSampleSpace($sampleSpace)
    {
        $this->sampleSpace = $sampleSpace;
    }

    public function getSampleSpace()
    {
        return $this->sampleSpace;
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
