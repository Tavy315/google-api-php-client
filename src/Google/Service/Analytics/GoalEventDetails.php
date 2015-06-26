<?php
class Google_Service_Analytics_GoalEventDetails extends Google_Collection
{
    protected $collection_key = 'eventConditions';
    protected $internal_gapi_mappings = [ ];
    protected $eventConditionsType = 'Google_Service_Analytics_GoalEventDetailsEventConditions';
    protected $eventConditionsDataType = 'array';
    public $useEventValue;

    public function setEventConditions($eventConditions)
    {
        $this->eventConditions = $eventConditions;
    }

    public function getEventConditions()
    {
        return $this->eventConditions;
    }

    public function setUseEventValue($useEventValue)
    {
        $this->useEventValue = $useEventValue;
    }

    public function getUseEventValue()
    {
        return $this->useEventValue;
    }
}
