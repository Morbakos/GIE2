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
    return view('home');
});

Route::get('/rejoindre', function () {
    return view('rejoindre');
});

Route::get('/regles', function () {
    return view('regles');
});

Route::get('/formations', function () {
    return view('forma/formations');
});

Route::get('/formations/materiels', function () {
    return view('forma/materiels');
});

Route::get('/formations/charlie', function () {
    return view('forma/charlie');
});

Route::get('/formations/deplacements', function () {
    return view('forma/deplacements');
});

Route::get('/formations/navigation', function () {
    return view('forma/navigation');
});

Route::get('/formations/leader', function () {
    return view('forma/leader');
});

Route::get('/formations/radio', function () {
    return view('forma/radio');
});

Route::get('/team', function () {
    return view('team');
});

/*
Route::get('/demo', function () {
    return view('demo');
});

Route::get('/missions', function () {
    return view('mission/missions');
});

Route::get('/missions/add', function () {
    return view('mission/formaddmission');
});

Route::get('/missions/edit/{n}', function () {
    return view('mission/editmission');
});

Route::get('/tutos', function () {
    return view('tuto/tutos');
});

Route::get('/tutos/add', function () {
    return view('tuto/formaddtuto');
});

Route::get('/tutos/{n}', function () {
    return view('tuto/viewtutos');
});

Route::get('serve', function () {
    return view('serve');
});

Auth::routes();
*/