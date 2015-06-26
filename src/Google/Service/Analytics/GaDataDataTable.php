<?php
class Google_Service_Analytics_GaDataDataTable extends Google_Collection
{
    protected $collection_key = 'rows';
    protected $internal_gapi_mappings = [ ];
    protected $colsType = 'Google_Service_Analytics_GaDataDataTableCols';
    protected $colsDataType = 'array';
    protected $rowsType = 'Google_Service_Analytics_GaDataDataTableRows';
    protected $rowsDataType = 'array';

    public function setCols($cols)
    {
        $this->cols = $cols;
    }

    public function getCols()
    {
        return $this->cols;
    }

    public function setRows($rows)
    {
        $this->rows = $rows;
    }

    public function getRows()
    {
        return $this->rows;
    }
}
