<?php
declare (strict_types = 1);

namespace app\web\controller;

use app\BaseController;
use app\home\controller\Base;
use think\Db;
use think\facade\View;

class Index extends BaseController
{
    // 选择卡面
    public function index()
    {
        return View::fetch();
    }

    // 申请卡
    public function create($id)
    {
        session('cf_id',$id);
        return View::fetch();
    }

    public function city(){
        $data = Db::table('city')->where('pid',0)->select();
        return json(['code'=>200,'msg'=>'success','data'=>$data]);
    }

    public function citys($id){
        $data = Db::table('city')->where('pid',$id)->select();
        return json(['code'=>200,'msg'=>'success','data'=>$data]);
    }
    // 激活
    public function activation()
    {
        return View::fetch();
    }

    // 个人中心
    public function home()
    {
        return View::fetch();
    }

    // 账单查询
    public function search()
    {
        return View::fetch();
    }

    // 还款
    public function repayment()
    {
        return View::fetch();
    }


}
