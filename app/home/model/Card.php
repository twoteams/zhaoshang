<?php
declare (strict_types = 1);

namespace app\home\model;

use think\Model;

/**
 * @mixin \think\Model
 */
class Card extends Model
{
    public function carduser()
    {
        return $this->belongsTo(User::class,'u_id','id');
        //return self::join('user','card.u_id=user.id')->select()->toArray();
    }
}
