<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/31
 * Time: 19:45
 */

$app['router']->get('/', function() {
    return '<h1>路由成功!!!</h1>';
});

$app['router']->get('/controller', 'App\Http\Controllers\WelcomeController@index');