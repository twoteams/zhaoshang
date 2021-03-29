<?php
declare (strict_types = 1);

namespace app\web\controller;

use app\BaseController;
use think\facade\View;

class Index extends BaseController
{
    // 选择卡面
    public function index()
    {
        return View::fetch();
    }

    // 申请卡
    public function create()
    {
        return View::fetch();
    }

    // 登录
    public function login()
    {
        return View::fetch();
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
