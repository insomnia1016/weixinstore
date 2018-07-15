<?php
/**
 * Created by PhpStorm.
 * User: 江中白条
 * Date: 2018/7/11
 * Time: 22:38
 */

namespace app\api\controller\v1;

use app\api\model\Banner as BannerModel;
use app\api\validate\IDMustBeInpostiveInt;
use app\lib\exception\BannerMissException;

class Banner
{
    /**
     *获取指定id的banner信息
     * @url /banner/:id
     * @Http GET
     * @param $id Banner的id号
     */
    public function getBanner($id)
    {

        (new IDMustBeInpostiveInt())->goCheck();

        $banner = BannerModel::getBannerByID($id);
        if (!$banner) {
            throw  new BannerMissException();
        }
        return $banner;

    }
}