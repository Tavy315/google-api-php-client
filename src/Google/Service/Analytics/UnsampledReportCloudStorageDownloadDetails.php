<?php
class Google_Service_Analytics_UnsampledReportCloudStorageDownloadDetails extends Google_Model
{
    protected $internal_gapi_mappings = [ ];
    public $bucketId;
    public $objectId;

    public function setBucketId($bucketId)
    {
        $this->bucketId = $bucketId;
    }

    public function getBucketId()
    {
        return $this->bucketId;
    }

    public function setObjectId($objectId)
    {
        $this->objectId = $objectId;
    }

    public function getObjectId()
    {
        return $this->objectId;
    }
}
