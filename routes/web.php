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
    return view('front/home');
});


// RUTAS ADMIN
Route::get('/'.env('APP_URL_FOLDER').'/', function () {
	return view('back/home');
});

Route::get('/'.env('APP_URL_FOLDER').'/edit-post/{id_post}/', function ($id_post) {	
	echo "EDITANDO POST: ".$id_post."<br/>";

	// return view('back/home');
});