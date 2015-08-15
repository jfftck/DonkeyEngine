<?php
/**
 * Created by IntelliJ IDEA.
 * User: Jeffrey
 * Date: 2015-07-04
 * Time: 14:50
 */

namespace donkeyEngine\data;


abstract class DataDetails
{
    private $details;

    public abstract function isValid();

    public function addDetail($key, $value) {
        if (is_array($this->details) and ! array_key_exists($key, $this->details)) {
            $this->details = $value;
        } else {
            throw new Exception("Key $key already exists.");
        }
    }

    public function details() {
        return $this->details;
    }
}