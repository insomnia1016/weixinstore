<?php
/**
 * Created by 江中白条.
 * User: ch
 * Date: 2018/7/22
 * Time: 16:17
 */

namespace app\api\model;


class ProductProperty extends  BaseModel
{
    protected $hidden = [
      'product_id','delete_time','id','update_time'
    ];

}