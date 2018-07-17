<?php
/**
 * Created by 江中白条.
 * User: ch
 * Date: 2018/7/17
 * Time: 10:39
 */

namespace app\api\validate;


class TokenGet extends  BaseValidate
{
    protected $rule = [
        'code' => 'require|isNotEmpty'
    ];

    protected $message = [
      'code' => '没有code还想获取Token，做梦哦'
    ];

}