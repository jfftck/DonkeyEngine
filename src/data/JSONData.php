<?php
/**
 * Created by IntelliJ IDEA.
 * User: Jeffrey
 * Date: 2015-07-04
 * Time: 14:48
 */

namespace donkeyEngine\data;


class JSONData implements Data
{
    private $path;

    public function connect()
    {
        // TODO: Implement connect() method.
    }

    public function close()
    {
        // TODO: Implement close() method.
    }

    public function read($key = null)
    {
        // TODO: Implement read() method.
    }

    public function write($key, $data)
    {
        // TODO: Implement write() method.
    }

    public function connectionDetails(DataDetails $details)
    {
        if ($details->isValid()) {
            $details = $details->details();
            $this->path = $details["path"];
        }
    }
}