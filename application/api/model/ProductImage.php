<?php
/**
 * Created by 江中白条.
 * User: ch
 * Date: 2018/7/22
 * Time: 16:15
 */

namespace app\api\model;


class ProductImage extends  BaseModel
{
    protected  $hidden = [
      'img_id','delete_time','product_id'
    ];
    public function imgUrl(){
        return $this->belongsTo('Image','img_id','id');
    }
}