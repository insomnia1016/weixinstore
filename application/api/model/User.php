<?php
/**
 * Created by 江中白条.
 * User: ch
 * Date: 2018/7/17
 * Time: 10:46
 */

namespace app\api\model;


class User extends  BaseModel
{
    public function address(){
        return $this->hasOne('UserAddress','user_id','id');
    }

    public static function getByOpenID($openID){
        $user = self::where('openid','=',$openID)->find();
        return $user;
    }

}