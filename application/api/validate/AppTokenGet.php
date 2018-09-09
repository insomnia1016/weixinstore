<?php
/**
 * Created by 江中白条.
 * User: ch
 * Date: 2018/9/9
 * Time: 7:38
 */

namespace app\api\validate;


class AppTokenGet extends  BaseValidate
{
    protected $rule =[
        'ac'=> 'require|isNotEmpty',
        'se'=> 'require|isNotEmpty'
    ];

}