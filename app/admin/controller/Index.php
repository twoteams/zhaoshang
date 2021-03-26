<?php
declare (strict_types = 1);

namespace app\admin\controller;

use think\Db;
use think\facade\View;

class Index
{
    public function index()
    {
        return View::fetch();
    }

    public function welcome(){
        return View::fetch();
    }
}
