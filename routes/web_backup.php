<?php

use Illuminate\Support\Facades\Route;

Route::any('/welcome', function () {
    return view('welcome');
});


Route::get('/', function () {
    return view('welcome');
});


// Route::match(['get','post'],'match-check', function () {
//     return view('welcome');
// });

Route::get('controller-check-updated/{id}/{name}/{phone}','App\Http\Controllers\Admin\PracticeController@practiceMethod')->where(['id'=>'[0-9]+','name'=>'[A-Za-z]+'])->name('controller-check');

Route::get('controller-check-updated100','App\Http\Controllers\Admin\PracticeController@practiceMethod2')->name('controller-check-2');

/*
Route::prefix('supplier')->group(function(){

    Route::get('home','App\Http\Controllers\Admin\PracticeController@supplierMethodHome');
    Route::get('product','App\Http\Controllers\Admin\PracticeController@supplierMethodproduct');
    Route::get('about','App\Http\Controllers\Admin\PracticeController@supplierMethodabout');

});

Route::group(['prefix'=>'supplier','namespace'=>'App\Http\Controllers\Admin'],function(){

    Route::get('home','PracticeController@supplierMethodHome');
    Route::get('product','PracticeController@supplierMethodproduct');
    Route::get('about','PracticeController@supplierMethodabout');
    Route::get('about','PracticeController@supplierMethodabout');

});

*/


Route::group(['prefix'=>'supplier','namespace'=>'App\Http\Controllers\Admin'],function(){

    Route::get('home/{index}/{role}','PracticeController@supplierMethodHome');
    Route::get('product','PracticeController@supplierMethodproduct');
    Route::get('about','PracticeController@supplierMethodabout');
    Route::get('about','PracticeController@supplierMethodabout');

});

Route::any('{catchall}', 'App\Http\Controllers\Admin\PracticeController@notfound')->where('catchall', '.*');