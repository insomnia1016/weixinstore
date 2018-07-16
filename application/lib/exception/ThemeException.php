<?php
/**
 * Created by 江中白条.
 * User: ch
 * Date: 2018/7/16
 * Time: 9:52
 */

namespace app\lib\exception;


class ThemeException extends BaseException
{
    public $code = 404;
    public $errorCode = 30000;
    public $msg = '指定的主题不存在，请检查主题ID';

}