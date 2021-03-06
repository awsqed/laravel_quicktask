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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('task', 'TaskController', [
    'only' => [
        'index',
        'store',
        'destroy',
    ],
]);

Route::get('/lang/{locale?}', function($locale = 'en') {
    App::setLocale($locale);
    session()->put('locale', $locale);

    return redirect()->back();
});
