<?php
declare (strict_types = 1);

namespace app\admin\model;

use think\Model;

/**
 * @mixin \think\Model
 */
class BillModels extends Model
{
    //
    protected $table = 'bill';

    static public function SelectCard($c_id)
    {
        return self::where('c_id',$c_id)->select();
    }

    static public function SelectDate($c_id,$paymenttime)
    {
        return self::where('c_id',$c_id)->where('paymenttime',$paymenttime)->select();
    }

    static public function BillList($c_id)
    {

        return self::where('c_id','like','%'.$c_id.'%')->select();
    }

    static public function AddBill($arr)
    {
        return self::insert($arr);
    }
}
