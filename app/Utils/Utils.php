<?php

namespace App\Utils;

class Utils
{
    public static function generateUniqueId($lenght = 20)
    {
        $hex = md5('yourSaltHere'.uniqid('', true));

        $pack = pack('H*', $hex);
        $tmp = base64_encode($pack);

        $uid = preg_replace('#(*UTF8)[^A-Za-z0-9]#', '', $tmp);

        $lenght = max(4, min(128, $lenght));

        while (strlen($uid) < $lenght) {
            $uid .= self::generateUniqueId(22);
        }

        return substr($uid, 0, $lenght);
    }
}
