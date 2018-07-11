<?php
/**
 * Created by PhpStorm.
 * User: ch
 * Date: 2018/7/11
 * Time: 9:36
 */

namespace app\sample\controller;

use think\Request;

class Test
{
    public function Hello()
    {
//        $all = input('param.id');
//        $all = Request::instance()->route();
//        $all = $request->param();
//        var_dump($all);
        $id = Request::instance()->param('id');
        $name = Request::instance()->param('name');
        $age = Request::instance()->param('age');
        echo $id;
        echo '|';
        echo $name;
        echo '|';
        echo $age;
//        return 'hello, $name';
    }
}