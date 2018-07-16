<?php
/**
 * Created by 江中白条.
 * User: ch
 * Date: 2018/7/16
 * Time: 15:14
 */

namespace app\api\validate;


class Count extends  BaseValidate
{
    protected $rule = [
        'count' => 'isPositiveInteger|between:1,15'
    ];


}