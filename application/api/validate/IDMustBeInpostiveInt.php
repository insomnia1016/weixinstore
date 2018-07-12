<?php
/**
 * Created by PhpStorm.
 * User: ch
 * Date: 2018/7/12
 * Time: 10:42
 */

namespace app\api\validate;


use think\Validate;

class IDMustBeInpostiveInt extends BaseValidate
{
    protected $rule = [
        'id' => 'require|isPositiveInteger'
    ];

    protected function isPositiveInteger($value, $rule = '', $data = '', $field = '')
    {
        if (is_numeric($value) && is_int($value + 0) && ($value + 0) > 0) {
            return  true;
        }else{
            return $value.'必须是正整数';
        }
    }


}