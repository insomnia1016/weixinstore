<?php
/**
 * Created by 江中白条.
 * User: ch
 * Date: 2018/7/18
 * Time: 11:03
 */

namespace app\api\service;


class Token
{
    public static function  generateToken(){
        $randChars = getRandChar(32);
        $timestamp = $_SERVER['REQUEST_TIME_FLOAT'];
        $tokenSalt = config('secure.token_salt');

        return md5($randChars.$timestamp.$tokenSalt);
    }
}