<?php
/**
 * Created by 江中白条.
 * User: ch
 * Date: 2018/7/26
 * Time: 10:27
 */

namespace app\api\validate;


class PagingParameter extends BaseValidate
{
    protected $rule = [
        'page' => 'isPositiveInteger',
        'size' => 'isPositiveInteger'
    ];

    protected $message = [
        'page' => 'page必须是正整数',
        'size' => 'size必须是正整数'
    ];

}