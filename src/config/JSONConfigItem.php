<?php
/**
 * Created by IntelliJ IDEA.
 * User: Jeffrey
 * Date: 2015-07-04
 * Time: 12:41
 */

namespace donkeyEngine\config;


class JSONConfigItem implements ConfigItem
{
    private $defalutConfig = './config.json';

    public function load()
    {

    }

    public function keys($excludeReadOnly = true)
    {
        // TODO: Implement keys() method.
    }

    public function read($key)
    {
        // TODO: Implement read() method.
    }

    public function write($key, $data)
    {
        // TODO: Implement write() method.
    }

    public function close()
    {
        // TODO: Implement close() method.
    }
}