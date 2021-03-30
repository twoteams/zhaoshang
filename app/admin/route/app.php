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
//退出登录
Route::get('logout','Logout/index');

//审批管理
Route::group("AppRove",function () {
    //查看申请的所有信用卡信息
    Route::get('approve/index', 'index');
})->ext('html')->pattern(['id'=>'\d+', 'name'=>'\w+']);
//Route::group('AppRove', function () {
//    Route::get('approve-index', 'AppRove/index');
//})->prefix('AppRove/')->ext('html')->pattern(['id' => '\d+']);

//})->ext('html')->pattern(['id'=>'\d+', 'name'=>'\w+']);
Route::rule('', 'Address/index');
