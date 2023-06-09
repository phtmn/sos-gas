<?php

namespace App\Helpers;

use Carbon\Carbon;

class Util
{

    public static function sanitizeString($str)
    {
        $str = preg_replace('/[áàãâä]/ui', 'a', $str);
        $str = preg_replace('/[éèêë]/ui', 'e', $str);
        $str = preg_replace('/[íìîï]/ui', 'i', $str);
        $str = preg_replace('/[óòõôö]/ui', 'o', $str);
        $str = preg_replace('/[úùûü]/ui', 'u', $str);
        $str = preg_replace('/[ç]/ui', 'c', $str);
        // $str = preg_replace('/[,(),;:|!"#$%&/=?~^><ªº-]/', '_', $str);
        $str = preg_replace('/[^a-z0-9]/i', '', $str);
        $str = preg_replace('/_+/', '', $str); // ideia do Bacco :)
        return $str;
    }

    public static function parseDate($date)
    {
        $exploded = explode('/', $date);

        $date = Carbon::createFromDate($exploded[2], $exploded[1], $exploded[0]);
        return $date;
    }
}
