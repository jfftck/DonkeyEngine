<?php
/**
 * Created by IntelliJ IDEA.
 * User: Jeffrey
 * Date: 2015-07-04
 * Time: 12:24
 */

namespace donkeyEngine\config;


interface ConfigItem
{
    public function load();
    public function keys($excludeReadOnly = true);
    public function read($key);
    public function write($key, $data);
    public function close();
}