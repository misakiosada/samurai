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
<<<<<<< HEAD
=======

>>>>>>> 7511736140a1f114f3ed72525b3258ee147f5085
 Route::resource('posts', 'PostController');

 if (env('APP_ENV') === 'local') {
    URL::forceScheme('https');
 } 