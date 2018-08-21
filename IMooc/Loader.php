<?php
/**
 * Created by PhpStorm.
 * User: llz
 * Date: 18-8-21
 * Time: 下午9:42
 */

namespace IMooc;


class Loader
{
    public static function autoload($class)
    {
        var_dump($class);
    }
}