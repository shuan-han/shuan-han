<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();




Route::get('/', 'IndexController@index');

Route::get('/home', 'HomeController@index')->name('home');





/*
Route::group(['prefix' => 'admin','namespace'=>'Admin','middleware'=>['web','admin.login']],function ()
{
    //Route::get('login', 'IndexController@login');
    Route::get('index', 'IndexController@index');
    //Route::resouce('article', 'ArticleController');
});


/*
Route::group(['middleware'=>['web','admin.login']],function ()//Laravel 框架已經內建一些中介層，包括維護、身份驗證、CSRF 保護，等等。所有的中介層都放在 app/Http/Middleware 目錄內。
{
    Route::get('admin/login', 'Admin\LoginController@login');

    Route::get('/', function () {
        session(['key'=>123]);
        return view('welcome');
    });

    Route::get('/test', function () {
        echo session('key');
        return 'test';
    });
});
*/

