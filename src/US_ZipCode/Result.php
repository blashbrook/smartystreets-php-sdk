<?php

namespace SmartyStreets\US_ZipCode;

require_once(dirname(dirname(__FILE__)) . '/ArrayUtil.php');
require_once('City.php');
require_once('ZipCode.php');
use SmartyStreets\ArrayUtil;

class Result {
    private $status,
            $reason,
            $inputIndex,
            $cities,
            $zipCodes;

    public function __construct($obj = null) {
        if ($obj == null)
            return;

        $this->status = ArrayUtil::setField($obj, "status");
        $this->reason = ArrayUtil::setField($obj, "reason");
        $this->inputIndex = $obj["input_index"];
        $this->cities = ArrayUtil::setField($obj, "city_states", array());
        $this->zipCodes = ArrayUtil::setField($obj, "zipcodes", array());

        $this->cities = $this->convertToCityObjects();
        $this->zipCodes = $this->convertToZipCodeObjects();
    }

    private function convertToCityObjects() {
        $cityObjects = array();

        foreach ($this->cities as $city)
            $cityObjects[] = new City($city);

        return $cityObjects;
    }

    private function convertToZipCodeObjects() {
        $zipCodeObjects = array();

        foreach ($this->zipCodes as $zipCode)
            $zipCodeObjects[] = new ZipCode($zipCode);

        return $zipCodeObjects;
    }

    public function isValid() {
        return ($this->status == null && $this->reason == null);
    }

    //region [ Getters ]

    public function getCityAtIndex($index) {
        return $this->cities[$index];
    }

    public function getZipCodeAtIndex($index) {
        return $this->zipCodes[$index];
    }

    public function getStatus() {
        return $this->status;
    }

    public function getReason() {
        return $this->reason;
    }

    public function getInputIndex() {
        return $this->inputIndex;
    }

    public function getCities() {
        return $this->cities;
    }

    public function getZipCodes() {
        return $this->zipCodes;
    }

    //endregion

    //region [ Setters ]

    public function setStatus($status) {
        $this->status = $status;
    }

    public function setReason($reason) {
        $this->reason = $reason;
    }

    //endregion
}