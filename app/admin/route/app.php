<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\facade\Route;
//后台登录页
Route::get('login','Login/login');
//后台主页
Route::get('index', 'Index/index');
//后台欢迎页
Route::get('welcome', 'Index/welcome');
//文章列表
Route::get('article-list','Article/index');
//账单列表
Route::get('bill-list','Bill/index');
<<<<<<< HEAD


//立即还款


=======
//退出登录
Route::get('logout','Logout/index');
>>>>>>> 380b23d7eb0edbefee38cf9e73ae661f17895dda
