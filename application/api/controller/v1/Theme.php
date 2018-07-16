<?php

namespace app\api\controller\v1;


use app\api\validate\IDCollection;
use \app\api\model\Theme as ThemeModel;
use app\api\validate\IDMustBeInpostiveInt;
use app\lib\exception\ThemeException;

class Theme
{
    /*
     * @url /theme?ids=id1,id2,id3...
     * @return 一组theme模型
     */
    public function getSimpleList($ids = '')
    {
        (new IDCollection())->goCheck();

        $ids = explode(',',$ids);

        $result = ThemeModel::getThemeByIDs($ids);

        if($result->isEmpty()){
            throw  new ThemeException();
        }

        return $result;

    }

    /**
     * @param $id
     * @return array|false|\PDOStatement|string|\think\Model
     * @throws ThemeException
     * @throws \app\lib\exception\ParameterException
     */
    public  function getComplexOne($id){
        (new IDMustBeInpostiveInt())->goCheck();
        $theme = ThemeModel::getThemeWithProductsByID($id);
        if (!$theme){
            throw  new  ThemeException();
        }
        return $theme;
    }



}
