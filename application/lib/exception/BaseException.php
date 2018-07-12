<?php
/**
 * Created by 江中白条.
 * User: ch
 * Date: 2018/7/12
 * Time: 22:53
 */

namespace app\lib\exception;


use think\Exception;

class BaseException extends  Exception
{
    //HTTP 状态码 404,200
    public  $code=400;

    //错误具体信息
    public $msg = '参数错误';

    //自定义的错误码
    public  $errorCode = 10000;
}