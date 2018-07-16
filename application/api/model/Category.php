<?php
/**
 * Created by 江中白条.
 * User: ch
 * Date: 2018/7/16
 * Time: 16:45
 */

namespace app\api\model;


class Category extends BaseModel
{
    protected $hidden = ['delete_time','update_time','create_time'];

    public function img(){
        return $this->belongsTo('Image','topic_img_id','id');
    }
}