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
    return view('buildinfo');
});

Route::get('/demo', function () {
    return view('demo');
});

Route::get('/missions', function () {
    return view('mission/missions');
});

Route::get('/missions/edit/{n}', function () {
    return view('mission/editmission');
});

Route::get('/tutos', function () {
    return view('tuto/tutos');
});

Route::get('/tutos/{n}', function () {
    return view('tuto/viewtutos');
});

Route::get('serve', function () {
    return view('serve');
});

Auth::routes();
