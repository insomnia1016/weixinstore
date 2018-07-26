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
    protected $hidden = ['user_id', 'delete_time', 'update_time'];
    protected $autoWriteTimestamp = true;

    public static function getSummaryByUser($uid, $page = 1, $size = 15)
    {
        $paginateData = self::where('id', '=', $uid)
            ->order('create_time desc')
            ->paginate($size, true, ['page' => $page]);
        return $paginateData;
    }
}