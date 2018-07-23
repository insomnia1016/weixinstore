<?php
/**
 * Created by 江中白条.
 * User: ch
 * Date: 2018/7/23
 * Time: 12:57
 */

namespace app\lib\exception;


class ForbiddenException extends BaseException
{
    public $code = 403;
    public $msg = '权限不够';
    public $errorCode = 10001;

}