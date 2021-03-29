<?php
declare (strict_types = 1);

namespace app\home\model;

use think\Model;

/**
 * @mixin \think\Model
 */
class CardType extends Model
{
    // 查询信用卡图片类型数据
    public static function card_type()
    {
        return self::select()->toArray();
    }
}
