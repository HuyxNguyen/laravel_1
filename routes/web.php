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

Route::get('index','page_controller@Home');



Route::get('gioi_thieu', function (){
    return view('gioi_thieu');
});

//Route::get('sp_theu_tay', 'page_controller@sp_theu_tay');
Route::get('admin', function(){
    return view('admin');
})->name('admin');

Route::get('loai_sp/{type}','page_controller@loai_sp');
Route::get('loai_sp/{type}/{id_sp}','page_controller@chitiet_sp');

Route::get('them_spForm', function (){
    return view('form_sp');
});
Route::post('them_sp','page_controller@them_sp')->name('them_sp_moi');
