<?php
/**
 * Created by 江中白条.
 * User: ch
 * Date: 2018/7/12
 * Time: 22:58
 */

namespace app\lib\exception;


class BannerMissException extends BaseException
{
    public $code = 404;
    public $msg = '请求的Banner不存在';
    public $errorCode = 40000;
}