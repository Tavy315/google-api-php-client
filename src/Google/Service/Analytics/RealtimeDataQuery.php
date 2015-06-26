<?php
class Google_Service_Analytics_RealtimeDataQuery extends Google_Collection
{
    protected $collection_key = 'sort';
    protected $internal_gapi_mappings = [
        'maxResults' => 'max-results',
    ];
    public $dimensions;
    public $filters;
    public $ids;
    public $maxResults;
    public $metrics;
    public $sort;

    public function setDimensions($dimensions)
    {
        $this->dimensions = $dimensions;
    }

    public function getDimensions()
    {
        return $this->dimensions;
    }

    public function setFilters($filters)
    {
        $this->filters = $filters;
    }

    public function getFilters()
    {
        return $this->filters;
    }

    public function setIds($ids)
    {
        $this->ids = $ids;
    }

    public function getIds()
    {
        return $this->ids;
    }

    public function setMaxResults($maxResults)
    {
        $this->maxResults = $maxResults;
    }

    public function getMaxResults()
    {
        return $this->maxResults;
    }

    public function setMetrics($metrics)
    {
        $this->metrics = $metrics;
    }

    public function getMetrics()
    {
        return $this->metrics;
    }

    public function setSort($sort)
    {
        $this->sort = $sort;
    }

    public function getSort()
    {
        return $this->sort;
    }
}
