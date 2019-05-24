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
use think\Route;

Route::get('admin','admin/Index/index');
Route::resource('goods','admin/Goods');
Route::get('order','admin/Order/index');
Route::get('order/detail','admin/Order/detail');
Route::get('user','admin/User/index');
Route::rule('login','admin/Login/index','POST|GET');
Route::resource('pic','admin/Pic');
Route::get('loginout','admin/login/loginout');
Route::post('up','admin/Pic/up');



//api
Route::post('getSess','api/User/getSess');
Route::get('getImg','api/Pic/getImg');
