<?php
/**
 * Created by 江中白条.
 * User: ch
 * Date: 2018/9/9
 * Time: 7:41
 */

namespace app\api\model;


class ThirdApp extends  BaseModel
{
    public static function check($ac,$se){
        $app = self::where('app_id','=',$ac)
            ->where('app_secret','=',$se)
            ->find();
        return $app;
    }
}