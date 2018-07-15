<?php
/**
 * Created by PhpStorm.
 * User: 江中白条
 * Date: 2018/7/11
 * Time: 22:38
 */

namespace app\api\controller\v2;

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


        return 'this is verison 2 ';

    }
}