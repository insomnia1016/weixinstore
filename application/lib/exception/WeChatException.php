<?php
/**
 * Created by 江中白条.
 * User: ch
 * Date: 2018/7/17
 * Time: 22:24
 */

namespace app\lib\exception;


class WeChatException extends BaseException
{

    public $errorCode = 999;
    public $msg = '微信服务器接口调用失败';
    public $code = 400;
}