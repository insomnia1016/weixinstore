<?php

namespace app\api\model;

class Product extends BaseModel
{
    //
    protected  $hidden = [
        'delete_time','from','create_time',
        'update_time','pivot','category_id'
    ];

    public function getMainImgUrlAttr($value, $data)
    {
        return $this->prefixImageUrl($value,$data);
    }

    public static  function  getMostRecent($count){
        return self::limit($count)->order('create_time desc')->select();
    }
    public  static  function  getAllProductsByCategoryID($category_id){
        return self::where('category_id','=',$category_id)->select();
    }
}
