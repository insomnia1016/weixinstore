<?php
/**
 * Created by 江中白条.
 * User: ch
 * Date: 2018/7/22
 * Time: 23:10
 */

namespace app\lib\exception;


class UserException extends BaseException
{
    public $code = 404;
    public $errorCode = 60000;
    public $msg = '指定的用户不存在';

}