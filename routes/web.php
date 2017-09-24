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

use App\Address;
Route::get('/', 'AddressesController@displayAddresses'); 

Route::get('/NewAddress',function(){

    return view('NewAddress');
});
Route::get('/editAddress/{address}',function($id){
	$address=DB::table('addresses')->find($id);

    return view('editAddress',compact('address'));
});
Route::post('/add','AddressesController@store');
Route::post('/edit/{id}',['uses'=>'AddressesController@update']);
Route::get('/order/{id}',['uses'=>'AddressesController@sort']);
//Route::get('/order','AddressesController@sort');

Route::get('/search','AddressesController@search');
Route::get('/delete/{id}',['uses'=>'AddressesController@delete']);