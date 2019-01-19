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

Route::get('/', function(){

    return view("user");

});

Route::get('/anr', function(){

    return view("forms.anr");

});

Route::get('/anv', function(){

    return view("forms.anv");

});

Route::get('/hvrp', function(){

    return view("forms.hvrp");

});

Route::get('/ipsi', function(){

    return view("forms.ipsi");

});

Route::get('/psiv', function(){

    return view("forms.psiv");

});

Route::get('/notification', function(){

    return view("notification");

});

Route::post('/store', "FormController@store")->name("store");

Route::get('/location', function(){

    return view('location');

} );


Route::get('/redirect', "LoginController@redirect")->name("redirect");
Route::get('/callback', "LoginController@callback");
