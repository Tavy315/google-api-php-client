<?php
class Google_Service_Admin_MailItem extends Google_Collection
{
    protected $collection_key = 'labels';
    protected $internal_gapi_mappings = [ ];
    public $isDeleted;
    public $isDraft;
    public $isInbox;
    public $isSent;
    public $isStarred;
    public $isTrash;
    public $isUnread;
    public $kind;
    public $labels;

    public function setIsDeleted($isDeleted)
    {
        $this->isDeleted = $isDeleted;
    }

    public function getIsDeleted()
    {
        return $this->isDeleted;
    }

    public function setIsDraft($isDraft)
    {
        $this->isDraft = $isDraft;
    }

    public function getIsDraft()
    {
        return $this->isDraft;
    }

    public function setIsInbox($isInbox)
    {
        $this->isInbox = $isInbox;
    }

    public function getIsInbox()
    {
        return $this->isInbox;
    }

    public function setIsSent($isSent)
    {
        $this->isSent = $isSent;
    }

    public function getIsSent()
    {
        return $this->isSent;
    }

    public function setIsStarred($isStarred)
    {
        $this->isStarred = $isStarred;
    }

    public function getIsStarred()
    {
        return $this->isStarred;
    }

    public function setIsTrash($isTrash)
    {
        $this->isTrash = $isTrash;
    }

    public function getIsTrash()
    {
        return $this->isTrash;
    }

    public function setIsUnread($isUnread)
    {
        $this->isUnread = $isUnread;
    }

    public function getIsUnread()
    {
        return $this->isUnread;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setLabels($labels)
    {
        $this->labels = $labels;
    }

    public function getLabels()
    {
        return $this->labels;
    }
}
