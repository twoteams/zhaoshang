<?php
namespace app\home\controller;

use app\BaseController;
use app\Request;

class Integral extends BaseController{

    //积分兑换
    public function integral(Request $request)
    {
        dump($request->param());
        return json(['code'=>200]);
    }
}