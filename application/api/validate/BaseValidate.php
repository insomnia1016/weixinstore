<?php
/**
 * Created by PhpStorm.
 * User: ch
 * Date: 2018/7/12
 * Time: 12:04
 */

namespace app\api\validate;


use think\Exception;
use think\Request;
use think\Validate;

class BaseValidate extends  Validate
{
    public  function  goCheck(){
        $request = Request::instance();
        $params = $request->param();

        $result = $this->check($params);

        if (!$result){
            $error = $this->error;
            throw  new Exception($error);
        }else{
            return true;
        }
    }

}