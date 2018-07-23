<?php
/**
 * Created by 江中白条.
 * User: ch
 * Date: 2018/7/23
 * Time: 22:16
 */

namespace app\lib\exception;


class OrderException extends BaseException
{
    public $code = 404;
    public $msg = '订单不存在，请检查ID';
    public $errorCode = 80000;

}