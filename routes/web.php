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

        // Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

        // Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

        // Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/home', 'HomeController@index')->name('home');

	//Usuarios
Route::get('/usuarios', 'UsuarioController@index')->name('usuarios.index');
Route::get('/usuarios/usuarios', 'UsuarioController@buscar')->name('usuarios.buscar');
Route::get('/usuarios/create', 'UsuarioController@create')->name('usuarios.create');
Route::post('/usuarios', 'UsuarioController@store')->name('usuarios.store');
Route::get('/usuarios/destroy/{id}','UsuarioController@destroy')->name('usuarios.destroy');
Route::get('/usuarios/edit/{id}','UsuarioController@edit')->name('usuarios.edit');
Route::put('/usuarios/update/{id}','UsuarioController@update')->name('usuarios.update');

	//Pacientes
Route::get('/pacientes', 'PacienteController@index')->name('pacientes.index');
Route::get('/pacientes/pacientes', 'PacienteController@buscar')->name('pacientes.buscar');
Route::get('/pacientes/create', 'PacienteController@create')->name('pacientes.create');
Route::post('/pacientes', 'PacienteController@store')->name('pacientes.store');
Route::get('/pacientes/edit/{id}','PacienteController@edit')->name('pacientes.edit');
Route::put('/pacientes/update/{id}','PacienteController@update')->name('pacientes.update');

	//historiales
Route::get('/historiales/pacientes', 'HistorialController@pacientes')->name('historiales.pacientes');
Route::get('/historiales/pacientes/pacientes', 'HistorialController@buscar')->name('historiales.buscar');
Route::get('/historiales/paciente/historial/{id}', 'HistorialController@index')->name('historiales.index');
Route::get('/diagnostico', function () {
    return view('historiales.diagnostico');
})->name('historiales.diagnostico');

	//citas
Route::get('/agenda', function () {
    return view('citas.agenda');
})->name('citas.agenda');