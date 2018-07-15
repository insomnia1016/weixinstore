<?php
/**
 * Created by 江中白条.
 * User: ch
 * Date: 2018/7/16
 * Time: 1:02
 */

namespace app\api\validate;


class IDCollection extends BaseValidate
{
    protected $rule = [
        'ids' => 'require|checkIDs'
    ];

    protected  $message = [
      'ids' => 'ids必须是以逗号分隔的多个正整数'
    ];
    protected  function checkIDs($value){
        $values = explode(',',$value);
        if (empty($values)){
            return false;
        }
        foreach ($values as $id){
            if (!$this->isPositiveInteger($id)){
                return false;
            }
        }
        return true;
    }
}