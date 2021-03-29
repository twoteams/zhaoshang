<?php
declare (strict_types = 1);

namespace app\home\controller;

use app\model\home\LoginModel;
use app\validate\home\LoginValidate;
use think\facade\Db;
use think\facade\View;
use think\Request;
use think\exception\ValidateException;

class Login
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function login(Request $request)
    {
        //
        $arr = [
            'username' => $request->param('username'),
            'password' => $request->param('password')
        ];
        $username = $arr['username'];
        $password = $arr['password'];
        //validate验证机制
        try {
            validate(LoginValidate::class)->check([
                'username' => $arr['username'],
                'password' => $arr['password'],
            ]);
        } catch (ValidateException $e) {
            // 验证失败 输出错误信息
            dump($e->getError());
            exit();
        }
        if (Db::table('admin')->where($arr)->find()) {
            echo '登录成功,正在跳转...';
            header('refresh:2,url=/web/home');

        } else {
            echo '用户名或密码输入有误!!!正在返回登录页面...';
            header('refresh:2,url=/web/login');
        }
    }

        //获取model数据
//        $loginModelObj =new LoginModel();
//        $loginModel = $loginModelObj->getLoginModelByUsername($username);
//        //判断在数据库中，该登录用户是否存在
//        //判断用户是否存在
//        if(empty($adminUser) || $adminUser->status != config("status.mysql.table_normal")){
//            return show(config("status.error"), "不存在该用户");
//        }
//        $adminUser = $adminUser->toArray();
//
//        //判断密码
//        if(($adminUser['password']) != md5($password."_singwa_abc")){
//            return show(config("status.error"),"密码错误");
//        }
//
//        //将登陆信息记录到session中
//        session("adminUser",$loginModel);
//
//        //要记录表的信息
//        $updateData =[
//            "last_login_time" =>time(),
//            "last_login_ip" =>request()->ip(),
//            "update_time" =>time(),
//        ];
//        //记录信息到mysql表中,$adminUserObj模型里的
//        $res = $loginModelObj->updateById($adminUser['id'],$updateData);
//        if(empty($res)){
//            return show(config("status.error"),'登陆失败');
//        }
//        return show(config("status.success"), "登陆成功");
//    }
}
