<?php
/**
 * Created by 江中白条.
 * User: ch
 * Date: 2018/7/24
 * Time: 13:39
 */

namespace app\api\controller\v1;


use app\api\controller\BaseController;
use app\api\service\WxNotify;
use app\api\validate\IDMustBeInpostiveInt;
use app\api\service\Pay as PayService;

class Pay extends BaseController
{
    protected $beforeActionList = [
        'checkExclusiveScope' => ['only' => 'getPreOrder']
    ];

    public function getPreOrder($id = '')
    {
        (new IDMustBeInpostiveInt())->goCheck();
        $pay = new PayService($id);
        return $pay->pay();
    }

    public function receiveNotify(){

        $notify = new WxNotify();
        $notify->Handle();

//        //转发，用于调试回调方法
//       $xmlData = file_get_contents('php://input');
//       $result = url_post_raw('http://y.cn/api/v1/pay/re_notify?XDEBUG_SESSION_START=13133',$xmlData);
//       return $result;
    }
    public function redirectNotify(){

        //1.库存量检测，超卖
        //2.更新订单状态
        //3.扣除库存
        //如果成功处理，返回微信成功处理的信息，否则返回没有成功处理
        //特点：post ；xml格式，不携带参数
        $notify = new WxNotify();
        $notify->Handle();
    }

}