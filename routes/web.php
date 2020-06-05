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

Route::get('second-buyer-eloquent',"Controller@secondBuyerEloquent");
Route::get('second-buyer-no-eloquent',"Controller@secondBuyerNoEloquent");
Route::get('purchase-list-no-eloquent',"Controller@purchaseListNoEloquent");
Route::get('purchase-list-eloquent',"Controller@purchaseListEloquent");
Route::get('record-transfer',"Controller@recordTransfer");
Route::get('i-m-funny',function (){
    return view('funny');
});
