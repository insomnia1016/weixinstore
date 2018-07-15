<?php
/**
 * Created by PhpStorm.
 * User: ch
 * Date: 2018/7/12
 * Time: 10:42
 */

namespace app\api\validate;


class IDMustBeInpostiveInt extends BaseValidate
{
    protected $rule = [
        'id' => 'require|isPositiveInteger'
    ];

    protected $message = [
        'id' => 'id必须是正整数'
    ];


}