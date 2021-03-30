<?php
namespace app\web\controller;

use think\facade\View;

class Login {

    // 登录
    public function login()
    {
        return View::fetch();
    }
}