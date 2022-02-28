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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cv_alka', function () {
    return view('cv');
});

Route::get('/data_diri_alka', function () {
    return view('biodata_diri');
});

Route::get('/project_alka', function () {
    return view('project');
});
Route::get('/pendidikan_alka', function () {
    return view('pendidikan');
});