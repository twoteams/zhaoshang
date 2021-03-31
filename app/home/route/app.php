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

//
Route::get('card_face_list', 'Index/card_face_list');
Route::get('card_type', 'Index/card_type');
Route::get('cf_name','Index/cf_name');

//个人中心路由
Route::get('list','Index/index');
//登录的路由
Route::post('login','Login/login');
//退出的路由
Route::get('logout','Login/logout');


// 激活
Route::get('info','Activation/index');

Route::get('intergral','Intergral/intergral');
