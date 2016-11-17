<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Route::get('/', function () {
//     return view('auth/login');
// });

Auth::routes();

Route::get('/lihat/{id}', 'GuestController@lihat');
Route::get('status/{id}', 'SparingsController@status')->name('update-status');
Route::get('/', 'HomeController@index');
Route::get('/', 'GuestController@li');
Route::get('/view', 'GuestController@view');
Route::get('/jadwal', 'GuestController@index');
Route::get('/jawab', 'GuestController@jawab');
Route::get('/vi', 'GuestController@vi');
Route::get('/login', 'GuestController@list');
Route::get('settings/profile', 'SettingsController@profile');
Route::get('settings/profile/edit', 'SettingsController@editProfile');
Route::get('settings/password', 'SettingsController@editPassword');
Route::post('settings/profile', 'SettingsController@updateProfile');
Route::post('settings/password', 'SettingsController@updatePassword');
Route::resource('informasi', 'InformasisController');
Route::resource('galeri', 'GalerisController');
// Route::resource('authors', 'AuthorsController');
// Route::resource('tandings', 'TandingsController');
// Route::resource('sparings', 'SparingsController');
// Route::resource('lapangans','LapangansController');
// Route::resource('dsparings', 'DsparingsController');

Route::group(['middleware'=>['auth']], function () {
  Route::resource('lap_futsals', 'Lap_FutsalsController');
  Route::resource('authors', 'AuthorsController');
  Route::resource('tandings', 'TandingsController');
  Route::resource('sparings', 'SparingsController');
  Route::resource('lapangans','LapangansController');
  Route::resource('dsparings', 'DsparingsController');
});

Route::get('sparings/{sparing}/sparing', [
'middleware'  => ['auth'],
'as'          => 'guest.sparings.sparing',
'uses'        => 'SparingsController@sparing'
]);

Route::put('sparings/{sparing}/return', [
'middleware'  => ['auth', 'role:member'],
'as'          => 'member.sparings.return',
'uses'        => 'SparingsController@returnBack'
]);
