<?php
/**
 * Created by 江中白条.
 * User: ch
 * Date: 2018/7/22
 * Time: 18:33
 */

namespace app\api\controller\v1;


use app\api\validate\AddressNew;
use app\api\service\Token as TokenService;
use app\api\model\User as UserModel;
use app\lib\exception\SuccessMessage;
use app\lib\exception\UserException;

class Address
{
    public function createOrUpdate(){

        $validate = new AddressNew();
        $validate->goCheck();

        //根据Token获取uid
        //根据uid来查找用户数据，判断用户是否存在，如果不存在抛出异常
        //获取用户从客户端提交来的地址信息
        //根据用户地址信息是否存在，从而判断是添加地址还是更新地址

        $uid = TokenService::getCurrentUid();
        $user = UserModel::get($uid);
        if (!$user){
            throw  new UserException();
        }

        $dataArray = $validate->getDataByRule(input('post.'));

        $userAddress = $user->address;
        if (!$userAddress){
            $user->address()->save($userAddress);
        }else{
            $user->address->save($dataArray);
        }
        return  json(New SuccessMessage(),201);

    }

}