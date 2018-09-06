<?php
/**
 * Created by 江中白条.
 * User: ch
 * Date: 2018/7/23
 * Time: 18:52
 */

namespace app\api\controller\v1;


use app\api\controller\BaseController;
use app\api\validate\IDMustBeInpostiveInt;
use app\api\validate\OrderPlace;
use app\api\service\Token as TokenService;
use app\api\validate\PagingParameter;
use app\api\service\Token;
use app\api\model\Order as OrderModel;
use app\lib\exception\OrderException;


class Order extends BaseController
{
    protected $beforeActionList = [
        'checkExclusiveScope' => ['only' => 'placeOrder'],
        'checkPrimaryScope' => ['only' => 'getDetail,getSummaryByUser']
    ];


    //用户在选择商品后，向api提交包含它所选择商品的信息
    //api在接收到信息后，需要检查订单相关商品的库存量
    //有库存，把订单数据存入数据库中，下单成功了，反馈客户端信息，告诉客户端可以支付了
    //调用我们的支付接口，进行支付
    //还需要再次进行库存量检测
    //服务器这边就可以调用微信的支付接口进行支付
    //微信会返回我们一个支付结果（异步）
    //成功：也需要进行库存量的检查
    //成功：进行库存量的扣除，失败：放久一个支付失败的结果

    public function placeOrder()
    {
        (new OrderPlace())->goCheck();
        $products = input('post.products/a');
        $uid = TokenService::getCurrentUid();

        $order = new \app\api\service\Order();
        $status = $order->place($uid, $products);
        return $status;
    }

    public function getDetail($id){
        (new IDMustBeInpostiveInt())->goCheck();
        $order = OrderModel::get($id);
        if (!$order){
            throw new OrderException();
        }
        return $order->hidden(['prepay_id']);
    }

    public function getSummaryByUser($page = 1, $size = 10)
    {
        (new PagingParameter())->goCheck();
        $uid = Token::getCurrentUid();

        $paginateOrders = OrderModel::getSummaryByUser($uid,$page,$size);

        if ($paginateOrders->isEmpty()){
            return [
                'data' => [],
                'current_page' => $paginateOrders::getCurrentPage()
            ];
        }
        return [
            'data' => $paginateOrders->hidden(['prepay_id','snap_items','snap_address'])->toArray(),
            'current_page' =>  $paginateOrders::getCurrentPage()
        ];
    }

}