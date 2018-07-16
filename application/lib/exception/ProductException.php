<?php
/**
 * Created by 江中白条.
 * User: ch
 * Date: 2018/7/16
 * Time: 15:24
 */

namespace app\lib\exception;


class ProductException extends BaseException
{
    public $code = 404;
    public $errorCode = 20000;
    public $msg = '指定的商品不存在，请检查参数';

}