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

Route::get('/', "HomeController@index" );//adesso richiamo il controller e ci penserà lui alla rotta
    //da get / vai alla funzione index presente nell HomeController

Route::get('/filmpiuvotati', "filmController@index");