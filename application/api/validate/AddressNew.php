<?php
/**
 * Created by 江中白条.
 * User: ch
 * Date: 2018/7/22
 * Time: 18:34
 */

namespace app\api\validate;


class AddressNew extends  BaseValidate
{
    protected $rule=[
        'name' => 'require|isNotEmpty',
        'mobile' => 'require|isMobile',
        'province' => 'require|isNotEmpty',
        'city' => 'require|isNotEmpty',
        'country' => 'require|isNotEmpty',
        'detail' => 'require|isNotEmpty'
    ];

}