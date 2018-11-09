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
Route::get('/tiia/nosotros', function () {
    return view('about');
})->name('about');
Route::get('/tiia/paginas-web', function () {
    return view('paginas');
})->name('paginas');
Route::get('/tiia/contactanos','ContactoController@index')->name('contact');
Route::post('enviar','ContactoController@sendemail')->name('contact-send');
/*
Route::get('/tiia/portafolio', function () {
    return view('portafolio');
})->name('portafolio');
Route::get('/tiia/etapas', function () {
    return view('etapa');
})->name('etapas');*/