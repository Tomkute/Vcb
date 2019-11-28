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

//Route::get('/', function () {
//    return view('welcome');
//});
use Illuminate\Support\Facades\Route;

Route::get('/','HomeController@showTrangchu')->name('home');


//Route::match(['GET', 'POST'], '/core','CoreController@showCore')->name('core');
////
//Route::get('/assend','AssendController@showAssend')->name('assend');
////
//Route::get('/treasury','TreasuryController@showTreasury')->name('treasury');
////
//Route::get('/remintance','RemintanceController@showRemintance')->name('remintance');
////
//Route::get('/vcbbatch','VcbbatchController@showVcbbatch')->name('vcbbatch');
////
//Route::get('/ortherbatch','OrtherController@showOrtherbatch')->name('otherbatch');
////
//Route::get('/openclose','OpencloseController@showOpenclose')->name('openclose');
////
//Route::get('/coremainbatch','CoremainbatchController@showCoremainbatch')->name('coremainbatch');
////
//Route::get('/monitorair','MonitorairController@showMonitorair')->name('monitorair');



Route::match(['GET', 'POST'], '/login','HomeController@login')->name('login');

Route::match(['GET', 'POST'],'/batch','BatchController@Batch')->name('showbatch');

