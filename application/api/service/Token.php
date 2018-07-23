<?php
/**
 * Created by 江中白条.
 * User: ch
 * Date: 2018/7/18
 * Time: 11:03
 */

namespace app\api\service;


use app\lib\enum\ScopeEnum;
use app\lib\exception\ForbiddenException;
use app\lib\exception\TokenException;
use think\Cache;
use think\Exception;
use think\Request;

class Token
{
    public static function  generateToken(){
        $randChars = getRandChar(32);
        $timestamp = $_SERVER['REQUEST_TIME_FLOAT'];
        $tokenSalt = config('secure.token_salt');

        return md5($randChars.$timestamp.$tokenSalt);
    }

    public static function getCurrentTokenVar($key){
        $token = Request::instance()->header('token');
        $vars = Cache::get($token);
        if (!$vars){
            throw new TokenException();
        }else{
            if (!is_array($vars)){
                $vars = json_decode($vars,true);
            }
            if (array_key_exists($key,$vars)){
                return $vars[$key];
            }else{
                throw  new Exception('尝试获取Token变量并不存在');
            }
        }
    }
    public  static  function  getCurrentUid(){
        return self::getCurrentTokenVar('uid');
    }

    public static  function  needPrimaryScope(){
        $scope = self::getCurrentTokenVar('scope');
        if ($scope) {
            if ($scope >= ScopeEnum::User) {
                return true;
            } else {
                throw new ForbiddenException();
            }
        } else {
            throw new TokenException();
        }
    }
    public static function needExclusiveScope()
    {
        $scope = self::getCurrentTokenVar('scope');
        if ($scope) {
            if ($scope == ScopeEnum::User) {
                return true;
            } else {
                throw new ForbiddenException();
            }
        } else {
            throw new TokenException();
        }
    }
}