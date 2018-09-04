<?php
/**
 * Created by 江中白条.
 * User: ch
 * Date: 2018/7/17
 * Time: 10:33
 */

namespace app\api\controller\v1;

use app\api\service\UserToken;
use app\api\validate\TokenGet;
use app\lib\exception\ParameterException;

use app\api\service\Token as TokenService;

class Token
{

    /**
     * 用户获取令牌（登陆）
     * @url /token
     * @POST code
     * @note 虽然查询应该使用get，但为了稍微增强安全性，所以使用POST
     */
    public function getToken($code = '')
    {
        (new TokenGet())->goCheck();
        $ut = new UserToken($code);
        $token = $ut->get();
        return [
            'token' => $token
        ];

    }

    public function verifyToken($token = '')
    {
        if (!$token){
            throw new ParameterException([
                'token不允许为空'
            ]);
        }
        $valid = TokenService::verifyToken($token);
        return $valid;
    }

}