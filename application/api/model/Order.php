<?php
/**
 * Created by 江中白条.
 * User: ch
 * Date: 2018/7/24
 * Time: 0:18
 */

namespace app\api\model;


class Order extends BaseModel
{
    protected $hidden = ['user_id','delete_time','update_time'];

}