<?php
/**
 * Created by IntelliJ IDEA.
 * User: Jeffrey
 * Date: 2015-06-27
 * Time: 23:28
 */

namespace donkeyEngine\data;


interface Data
{
    public function connectionDetails(DataDetails $details);
    public function connect();
    public function close();
    public function read($key=null);
    public function write($key, $data);
}