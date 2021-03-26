<?php
declare (strict_types = 1);

namespace app\web\controller;

use app\BaseController;
use think\facade\View;

class Index extends BaseController
{
    public function index()
    {
        return View::fetch();
    }

    public function create()
    {
        return View::fetch();
    }

    public function login()
    {
        return View::fetch();
    }

    public function home()
    {
        return View::fetch();
    }

    public function search()
    {
        return View::fetch();
    }

    public function repayment()
    {
        return View::fetch();
    }


}
