<?php
namespace app\home\controller;

use app\BaseController;
use app\Request;
use think\facade\Db;

class  Intergral extends BaseController{

    //积分兑换
    public function intergral()
    {
        //接收参数
        $integral=$this->request->param("intergral");
        if (empty($integral)){
            json(['code'=>500,'msg'=>"参数不能为空","data"=>[]]);
        }
        //        $user_id=session("user.id");
        //接收用户id
        $user_id=1;
        //根据id查询数据
        $data=\app\home\model\Integral::where("u_id",$user_id)->value("intergral");
        if ($data<$integral){
            return json(['code'=>500,'msg'=>"积分不足","data"=>[]]);
        }
        $integral=$data-$integral;
        $res=\app\home\model\Integral::where("u_id",$user_id)->update(['intergral'=>$integral]);
        if ($res) return json(['code'=>200,'msg'=>"success","data"=>[]]);
    }
}