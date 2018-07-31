<?php
/**
 * Created by 江中白条.
 * User: ch
 * Date: 2018/7/31
 * Time: 16:53
 */

namespace app\api\controller\v1;


use app\api\controller\BaseController;

class Index extends BaseController
{
    public function  index(){
        echo  THINK_VERSION;
    }

}