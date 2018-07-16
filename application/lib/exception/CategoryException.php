<?php
/**
 * Created by 江中白条.
 * User: ch
 * Date: 2018/7/16
 * Time: 16:52
 */

namespace app\lib\exception;


class CategoryException extends  BaseException
{
    public $code = 404;
    public $errorCode = 50000;
    public $msg = '指定的种类不存在，请检查参数';
}