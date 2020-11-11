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
    return redirect ('/companies');
});
Route::get('/companies', '\App\Http\Controllers\CompaniesController@index');
Route::get('/addtable', '\App\Http\Controllers\CompaniesController@create');
Route::post('/companies/store', '\App\Http\Controllers\CompaniesController@store');
