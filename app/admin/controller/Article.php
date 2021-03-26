<?php
declare (strict_types = 1);

namespace app\admin\controller;

use think\Request;
use think\facade\View;
class Article
{
    public function index()
    {
        return View::fetch('article-list');
    }


}
