<?php

namespace App\Utils;

class ClearString
{
    public static function onlyNumber(string $string)
    {
        return preg_replace('/[^0-9]/', '', $string);
    }
}
