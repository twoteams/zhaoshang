<?php
declare (strict_types = 1);

namespace app\admin\controller;

use app\BaseController;
use think\Db;
use think\facade\View;

class Index extends Base
{
    public function index()
    {
//        dd(session(config('admin.session_admin')));
        return View::fetch();
    }

    public function welcome(){
        return View::fetch();
    }
}
