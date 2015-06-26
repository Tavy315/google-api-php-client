<?php
class Google_Service_Analytics_AnalyticsDataimportDeleteUploadDataRequest extends Google_Collection
{
    protected $collection_key = 'customDataImportUids';
    protected $internal_gapi_mappings = [ ];
    public $customDataImportUids;

    public function setCustomDataImportUids($customDataImportUids)
    {
        $this->customDataImportUids = $customDataImportUids;
    }

    public function getCustomDataImportUids()
    {
        return $this->customDataImportUids;
    }
}
