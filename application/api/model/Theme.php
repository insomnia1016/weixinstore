<?php

namespace app\api\model;

class Theme extends BaseModel
{
    protected $hidden = [
        'topic_img_id', 'delete_time', 'head_img_id', 'update_time'
    ];

    public function TopicImg()
    {
        return $this->belongsTo('Image', 'topic_img_id', 'id');
    }

    public function HeadImg()
    {
        return $this->belongsTo('Image', 'head_img_id', 'id');
    }

    public function Products()
    {
        return $this->belongsToMany('Product', 'theme_product', 'product_id', 'theme_id');
    }

    public static function getThemeWithProductsByID($id){
        $theme =  self::with('Products,TopicImg,HeadImg')->find($id);
        return $theme;
    }
    public static function getThemeByIDs($IDs)
    {
        return self::with('TopicImg,HeadImg')->select($IDs);
    }


}
