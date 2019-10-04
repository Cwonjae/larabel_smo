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

//시물레이터 그룹화
//stats -> 스탯
//ability -> 특성
Route::group(['prefix' => 'simulator', 'as' => 'simulator.'], function() {
    Route::get('stats', ['as' => 'view' , 'uses' => 'SimulatorController@statsView']);
    Route::get('ability',['as' => 'get_cont' , 'uses' => 'MindMapUserCtrl@ajaxRequestCont']);
});
