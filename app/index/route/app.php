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

Route::get('think1', function () {
    return 'hello,ThinkPHP6!1';
});

Route::get('hello/:name', 'index/hello');
Route::get('hello2/:name', 'test/hello2');
Route::get('captcha/[:config]','\\think\\captcha\\CaptchaController@index');



