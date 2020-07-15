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

use App\Mail\ContactMessageCreated;

Route::get('/', [
    'as'=>'root_path',
    'uses'=>'PageController@index'
]);

Route::get('/test-email', function(){
    return new ContactMessageCreated('Bmd bah', 'bmdmihomme@gmail.com', 'Merci pour laracarte');
});

Route::get('/about', [
    'as'=>'about_path',
    'uses'=>'PageController@about'
]);

Route::get('/contact', [
    'as'=>'contact_path',
    'uses'=>'MessageController@create'
]);

Route::post('/contact', [
    'as'=>'contact_path',
    'uses'=>'MessageController@store'
]);

Auth::routes();

Route::get('/confirm/{id}/{token}', 'Auth\RegisterController@confirm');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('etudiant', 'EtudiantController');
Route::resource('facture', 'FactureController');
Route::resource('client', 'ClientController');

