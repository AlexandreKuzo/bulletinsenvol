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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('register', function () {
		return view('register');
	});

Route::get('bulletin', function () {
		return view('bulletin');
	});
Route::get('creation', function () {
		return view('creation');
	});

Route::get('success', function () {
		return view('success');
	});
Route::get('seconde', function () {
		return view('seconde');
	});
Route::get('litteraire', function () {
		return view('litteraire');
	});
Route::get('scientifique', function () {
		return view('scientifique');
	});
Route::get('economique', function () {
		return view('economique');
	});

Route::get('dossier', function () {
		return view('dossier');
	});

Route::get('mentions', function () {
		return view('mentions');
	});

Route::get('sciencestechnique', function () {
		return view('sciencestechnique');
	});

Route::get('sciencegestion', function () {
		return view('sciencegestion');
	});

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('Auth\LoginController@__construct');

Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('Auth\RegisterController@register');

Route::get('bulletin', 'BulletinController@create')->name('bulletin');
Route::post('bulletin', 'BulletinController@store')->name('bulletin');

Route::get('sciencegestion', 'SciencegestionController@create')->name('sciencegestion');
Route::post('sciencegestion', 'SciencegestionController@store')->name('sciencegestion');

Route::get('sciencestechnique', 'ScienceTechniqueController@create')->name('sciencestechnique');
Route::post('sciencestechnique', 'ScienceTechniqueController@store')->name('sciencestechnique');

Route::get('seconde', 'SecondeController@create')->name('seconde');
Route::post('seconde', 'SecondeController@store')->name('seconde');

Route::get('economique', 'EconomiqueController@create')->name('economique');
Route::post('economique', 'EconomiqueController@store')->name('economique');

Route::get('litteraire', 'LitteraireController@create')->name('litteraire');
Route::post('litteraire', 'LitteraireController@store')->name('litteraire');

Route::get('scientifique', 'ScientifiqueController@create')->name('scientifique');
Route::post('scientifique', 'ScientifiqueController@store')->name('scientifique');

Route::get('dossier', 'DossierController@create')->name('dossier');
Route::post('dossier', 'DossierController@store')->name('dossier');

Route::get('password/reset{token}', 'Auth\ResetPasswordController@showResetForm')->name('password/reset');
Route::get('password/reset{token}', 'Auth\ResetPasswordController@reset')->name('password/reset');
