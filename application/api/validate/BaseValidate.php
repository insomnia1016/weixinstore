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

class BaseValidate extends Validate
{
    public function goCheck()
    {
        $request = Request::instance();
        $params = $request->param();

        $result = $this->batch()->check($params);

        if (!$result) {
            $err = new ParameterException([
                'msg' => $this->error
            ]);
            throw  $err;
        } else {
            return true;
        }
    }


    protected function isPositiveInteger($value, $rule = '', $data = '', $field = '')
    {
        if (is_numeric($value) && is_int($value + 0) && ($value + 0) > 0) {
            return true;
        } else {
            return false;
        }
    }

    protected function isNotEmpty($value, $rule = '', $data = '', $field = '')
    {
        if (empty($value)) {
            return false;
        }
        return true;
    }
    protected  function  isMobile($value){
        $rule = '/^((0\d{2,3}-\d{7,8})|(1[3584]\d{9}))$/';
        $result = preg_match($rule,$value);
        if ($result){
            return true;
        }else{
            return false;
        }
    }

    public function getDataByRule($array)
    {
        if (array_key_exists('user_id', $array) | array_key_exists('uid', $array)) {
            throw  new ParameterException([
                'msg' => '参数中包含有非法的参数名user_id或者uid'
            ]);
        }
        $newArray = [];
        foreach ($this->rule as $key => $value) {
            $newArray[$key] = $array[$key];
        }
        return $newArray;
    }

}