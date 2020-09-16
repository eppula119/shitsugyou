<?php

use Illuminate\Support\Facades\Route;

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

// APIのURL以外のリクエストに対してはindexテンプレート返す
// 画面遷移はフロントエンドのVueRouterが制御する
// Route::get('/{any?}', function () {
//   return view('auth.register');
// })->where('any', '.+');

// ーーーーーーーーーー認証系画面ーーーーーーーーーーーーーー

// ユーザー登録画面表示
Route::get('/register', function() {
  return view('auth.register');
}); 
// ログイン画面表示
Route::get('/login', function() {
  return view('auth.login');
}); 

Route::get('/', 'NeaterController@home')->name('neater.home'); // TOPページ表示
