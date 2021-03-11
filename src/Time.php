<?php
namespace longdaihai\tools;

class Time
{
    /**
     * @param int $time
     * @return string
     */
    public static function ymd(int $time): string
    {
        return date('Y-m-d H:i:s', $time);
    }
}