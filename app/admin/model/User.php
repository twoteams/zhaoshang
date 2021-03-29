<?php
declare (strict_types = 1);

namespace app\admin\model;

use think\Model;

/**
 * @mixin \think\Model
 */
class User extends Model
{
    //查询所有申请的信用卡
    public function GetAll(){
        $data = $this
            ->join('card_face','user.cf_id = card_face.id')
            ->join('card_type','user.ct_id = card_type.id')
            ->select();
        return $data;
    }

    //建议额度
    public static function updates($id,$price){
        if (!is_numeric($price) && $price!=""){
            return false;
        }
        $data = self::where("id",$id)->update(['jy_price'=>$price]);
        return $data;
    }
    //通过
    public static function tstatus($id,$name){
        if ($name=='staff'){
            $data = self::where('id',$id)->update(['cstatus'=>1]);
        }
        if ($name=='manager'){
            $data = self::where('id',$id)->update(['fstatus'=>1]);
        }
        return $data;
    }
    //不通过
    public static function bstatus($id,$name){
        if ($name=='staff'){
            $data = self::where('id',$id)->update(['cstatus'=>2]);
        }
        if ($name=='manager'){
            $data = self::where('id',$id)->update(['fstatus'=>2]);
        }
        return $data;
    }
}
