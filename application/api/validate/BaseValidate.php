<?php
/**
 * Created by PhpStorm.
 * User: ch
 * Date: 2018/7/12
 * Time: 12:04
 */

namespace app\api\validate;


use app\lib\exception\ParameterException;
use think\Request;
use think\Validate;

class BaseValidate extends  Validate
{
    public  function  goCheck(){
        $request = Request::instance();
        $params = $request->param();

        $result = $this->batch()->check($params);

        if (!$result){
            $err  = new ParameterException([
                'msg' => $this->error
            ]);
            throw  $err;
        }else{
            return true;
        }
    }


    protected function isPositiveInteger($value, $rule = '', $data = '', $field = '')
    {
        if (is_numeric($value) && is_int($value + 0) && ($value + 0) > 0) {
            return  true;
        }else{
            return false;
        }
    }

}