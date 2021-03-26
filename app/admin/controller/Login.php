<?php
declare (strict_types = 1);

namespace app\admin\controller;

use app\admin\model\Admin;
use app\BaseController;
use think\Request;
use think\facade\View;
class Login extends BaseController
{

    public function login()
    {
        return View::fetch();
    }
    public function LoginIndex()
    {
        $username = $this->request->param('username');
        $password = $this->request->param('password');
        $obj = new Admin();
        $data =$obj->GetUserName($username);
        if (empty($data) || !$data){
            return show(config('status.user_not_found'),"用户不存在");
        }
        $data = $data->toArray();
        if (md5($password)!=$data['password']){
            return show(config('status.error'),"密码错误");
        }
        session(config('admin.session_admin'),$data);
        return show(config('status.success'),"登录成功");
    }

    public function logout()
    {
        return 111;
    }
}
