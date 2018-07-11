<?php
/**
 * Created by PhpStorm.
 * User: 江中白条
 * Date: 2018/7/11
 * Time: 22:38
 */

namespace app\api\controller\v1;

use app\api\validate\TestValidate;
use think\Validate;
class Banner
{
    /**
     *获取指定id的banner信息
     * @url /banner/:id
     * @Http GET
     * @param $id Banner的id号
     */
    public function  getBanner($id){

//        独立验证
//        验证器
        $data = [
            'name'=>'vendor12345',
            'email' => 'verdorqq.com'
        ];
        $validate = new TestValidate();
        $result = $validate->batch()->check($data);

        var_dump($validate->getError());
    }
}