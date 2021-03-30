<?php
namespace app\home\controller;

use app\BaseController;
use app\home\model\User;

class Login extends BaseController {
    public function login(){
        $username = $this->request->param('username');
        $password = $this->request->param('password');
        $obj = new User();
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

    public function logout(){
        session(config('admin.session_admin'),null);
        return redirect('/web/login');
    }
}