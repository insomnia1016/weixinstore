<?php
/**
 * Created by 江中白条.
 * User: ch
 * Date: 2018/9/9
 * Time: 7:40
 */

namespace app\api\service;


use app\api\model\ThirdApp;
use app\lib\exception\TokenException;

class AppToken extends Token
{
    public function get($ac,$se){
        $app = ThirdApp::check($ac,$se);
        if (!$app){
            throw  new TokenException([
                'msg'=>'授权失败',
                'errorCode'=>10004
            ]);
        }else{
            $scope = $app->scope;
            $uid = $app->id;
            $values = [
                'scope'=>$scope,
                'uid'=>$uid
            ];
            $token = $this->saveToCache($values);
            return $token;

        }
    }

    public  function  saveToCache($values){
        $token = self::generateToken();
        $expire_in = config('setting.token_expire_in');
        $result = cache($token,json_encode($values),$expire_in);
        if (!$result){
            throw new TokenException([
                'msg' => '服务器缓存异常',
                'errorCode'=>10005
            ]);
        }
        return $token;
    }
}