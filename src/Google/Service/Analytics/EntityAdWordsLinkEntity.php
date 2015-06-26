<?php
class Google_Service_Analytics_EntityAdWordsLinkEntity extends Google_Model
{
    protected $internal_gapi_mappings = [ ];
    protected $webPropertyRefType = 'Google_Service_Analytics_WebPropertyRef';
    protected $webPropertyRefDataType = '';

    public function setWebPropertyRef(Google_Service_Analytics_WebPropertyRef $webPropertyRef)
    {
        $this->webPropertyRef = $webPropertyRef;
    }

    public function getWebPropertyRef()
    {
        return $this->webPropertyRef;
    }
}
