<?php
/**
 * Created by 江中白条.
 * User: ch
 * Date: 2018/7/22
 * Time: 23:55
 */

namespace app\api\model;


class UserAddress extends  BaseModel
{
    protected $hidden = [
        'id','delete_time','user_id'
    ];

}