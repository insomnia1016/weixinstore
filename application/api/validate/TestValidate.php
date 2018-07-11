<?php
/**
 * Created by PhpStorm.
 * User: 江中白条
 * Date: 2018/7/11
 * Time: 23:09
 */

namespace app\api\validate;



use think\Validate;

class TestValidate extends Validate
{
    protected  $rule = [
        'name' => 'require|max:10',
        'email' => 'email'
    ];
}