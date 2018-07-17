<?php
/**
 * Created by 江中白条.
 * User: ch
 * Date: 2018/7/16
 * Time: 15:13
 */

namespace app\api\controller\v1;


use app\api\validate\Count;
use app\api\model\Product as ProductModel;
use app\api\validate\IDMustBeInpostiveInt;
use app\lib\exception\ProductException;

class Product
{
    public function getRecent($count = 15)
    {
        (new Count())->goCheck();

        $products = ProductModel::getMostRecent($count);

        if ($products->isEmpty()) {
            throw  new ProductException();
        }
        $products = $products->hidden(['summary']);
        return $products;

    }

    public function  getAllinByCategoryID($id){
        (new IDMustBeInpostiveInt())->goCheck();

        $products = ProductModel::getAllProductsByCategoryID($id);
        if ($products->isEmpty()){
            throw new ProductException();
        }
        $products = $products->hidden(['summary']);
        return $products;

    }
}