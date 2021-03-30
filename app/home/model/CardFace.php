<?php
declare (strict_types = 1);

namespace app\home\model;

use think\Model;

/**
 * @mixin \think\Model
 */
class CardFace extends Model
{
    // 查询信用卡类型数据
    public static function card_face_list()
    {
        return self::select()->toArray();
    }
    

}
