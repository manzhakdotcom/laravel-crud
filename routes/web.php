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
//Появился с 5.5
//Route::view('/', 'welcome');
//Route::redirect('/here1', 'passports', 301);

Route::get('/', 'UsersController@index');

Route::get('/{name}/{id}', function ($name, $id) {
    return view('new/welcome', compact('name'))->withIdName($id);
})->where(['name' => '[a-z]+', 'id'=>'[0-9]+']);

Route::resource('passports', 'PassportController');

//dd(Route::getRoutes());
//Если необязательный параметр "?"
//Route::get('user/{id?}', function($id = null) {
//  return 'User ' . $id;
//});

//Один из вариантов
//Route::get('name_{id}', function($id){
//  return 'User ' . $id;
//});

//Регулярные выражения
//Route::get('user/{$name}', function($name){
//  //
//})->where('name', '[A-Za-z]+');

