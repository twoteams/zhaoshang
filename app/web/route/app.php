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

Route::get('index', 'Index/index');
Route::get('create', 'Index/create');
Route::get('login', 'Index/login');
Route::get('activation', 'Index/activation');
Route::get('home', 'Index/home');
Route::get('search', 'Index/search');
Route::get('repayment', 'Index/repayment');



