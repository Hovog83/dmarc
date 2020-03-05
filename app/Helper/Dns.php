<?php

namespace App\Helper;

use Illuminate\Http\Request;

class Dns 
{
   
    public static function getSpf($Dns)
    {
        foreach ($Dns as $key => $value) {
                $str = $value['txt'];
                $search = "v=spf1";
                if (preg_match("/{$search}/i", $str)) {
                    return $str;
                }
            }
    }
}