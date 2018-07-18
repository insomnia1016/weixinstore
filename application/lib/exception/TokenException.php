<?php
/**
 * Created by 江中白条.
 * User: ch
 * Date: 2018/7/18
 * Time: 12:06
 */

namespace app\lib\exception;


class TokenException extends  BaseException
{
    public $code = 401;
    public $errorCode = 10001;
    public $msg = 'Token已过期或无效Token';
}