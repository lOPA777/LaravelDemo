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
//    return view('index');          // легкий контролер для страницы
//})->name('Main');

Route::get('/',IndexController::class)->name('Main');  // для сложных методов если много страниц

Route::get('/about','PageController@about')->name('About');

Route::get('/contacts','PageController@contacts')->name('Contacts'); // легкий контролер для страницы


//Route::get('/contacts', function () {
//    return view('Contacts');            // легкий контролер для страницы
//})->name('Contacts');
