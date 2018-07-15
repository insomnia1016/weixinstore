<?php

namespace app\api\model;

class Theme extends BaseModel
{
    public  function  TopicImg(){
        return $this->belongsTo('Image','topic_img_id','id');
    }

    public  function  HeadImg(){
        return $this->belongsTo('Image','head_img_id','id');
    }
}
