<?php

namespace SmartyStreets\US_Street;

require_once(dirname(dirname(__FILE__)) . '/ArrayUtil.php');
use SmartyStreets\ArrayUtil;

class Analysis {
    private $dpvMatchCode,
            $dpvFootnotes,
            $cmra,
            $vacant,
            $active,
            $isEwsMatch,
            $footnotes,
            $lacsLinkCode,
            $lacsLinkIndicator,
            $isSuiteLinkMatch;

    public function __construct($obj) {
        $this->dpvMatchCode = ArrayUtil::setField($obj, 'dpv_match_code');
        $this->dpvFootnotes = ArrayUtil::setField($obj, 'dpv_footnotes');
        $this->cmra = ArrayUtil::setField($obj, 'dpv_cmra');
        $this->vacant = ArrayUtil::setField($obj, 'dpv_vacant');
        $this->active = ArrayUtil::setField($obj, 'active');
        $this->isEwsMatch = ArrayUtil::setField($obj, 'ews_match');
        $this->footnotes = ArrayUtil::setField($obj, 'footnotes');
        $this->lacsLinkCode = ArrayUtil::setField($obj, 'lacslink_code');
        $this->lacsLinkIndicator = ArrayUtil::setField($obj, 'lacslink_indicator');
        $this->isSuiteLinkMatch = ArrayUtil::setField($obj, 'suitelink_match');
    }

    //region [ Getters ]

    public function getDpvMatchCode() {
        return $this->dpvMatchCode;
    }

    public function getDpvFootnotes() {
        return $this->dpvFootnotes;
    }

    public function getCmra() {
        return $this->cmra;
    }

    public function getVacant() {
        return $this->vacant;
    }

    public function getActive() {
        return $this->active;
    }

    public function isEwsMatch() {
        return $this->isEwsMatch;
    }

    public function getFootnotes() {
        return $this->footnotes;
    }

    public function getLacsLinkCode() {
        return $this->lacsLinkCode;
    }

    public function getLacsLinkIndicator() {
        return $this->lacsLinkIndicator;
    }

    public function isSuiteLinkMatch() {
        return $this->isSuiteLinkMatch;
    }

    //endregion
}