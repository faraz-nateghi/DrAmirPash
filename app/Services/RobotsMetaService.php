<?php

namespace App\Services;

class RobotsMetaService
{
    public static function handle($item)
    {
        $str = "";

        if ($item->follow == 1) {
            $str .= "follow, ";
        } else {
            $str .= "nofollow, ";
        }

        if ($item->index == 1) {
            $str .= "index, ";
        } else {
            $str .= "noindex, ";
        }

        return $str;
    }
}
