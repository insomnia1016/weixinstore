<?php
/**
 * Created by 江中白条.
 * User: ch
 * Date: 2018/7/23
 * Time: 20:30
 */

namespace app\api\controller;


use think\Controller;
use app\api\service\Token as TokenService;

class BaseController extends  Controller
{
    public function checkPrimaryScope()
    {
        TokenService::needPrimaryScope();
    }
    public function checkExclusiveScope()
    {
        TokenService::needExclusiveScope();
    }

}