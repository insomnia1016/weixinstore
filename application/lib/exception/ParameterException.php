<?php
/**
 * Created by 江中白条.
 * User: ch
 * Date: 2018/7/14
 * Time: 14:32
 */

namespace app\lib\exception;


class ParameterException extends BaseException
{
    public $code = 400;
    public $msg = '参数错误';
    public $errorCode = 10000;

}