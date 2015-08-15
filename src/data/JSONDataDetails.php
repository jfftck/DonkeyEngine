<?php
/**
 * Created by IntelliJ IDEA.
 * User: Jeffrey
 * Date: 2015-07-05
 * Time: 0:31
 */

namespace data;

use donkeyEngine\data\DataDetails;

class JSONDataDetails extends DataDetails
{
    /**
     * JSONDataDetails constructor.
     */
    public function __construct($path)
    {
        $this->addDetail("path", $path);
    }

    public function isValid()
    {
        return is_array($this->details()) and array_key_exists("path", $this->details());
    }
}