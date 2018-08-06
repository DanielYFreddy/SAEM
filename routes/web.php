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
//Route::get('/historiales/pacientes', 'HistorialController@pacientes')->name('historiales.pacientes');
//Route::get('/historiales/pacientes/pacientes', 'HistorialController@buscar')->name('historiales.buscar');
Route::get('/historiales/paciente/historial/{id}', 'HistorialController@index')->name('historiales.index');
    
    //diagnosticos
Route::get('/diagnosticos/paciente/{paciente_id}', 'DiagnosticoController@index')->name('diagnosticos.index');
Route::get('/diagnosticos/create/{paciente_id}', 'DiagnosticoController@create')->name('diagnosticos.create');
Route::post('/diagnosticos/store', 'DiagnosticoController@store')->name('diagnosticos.store');
//Route::get('/diagnosticos/edit/{id}','DiagnosticoController@edit')->name('diagnosticos.edit');
//Route::put('/diagnosticos/update/{id}','DiagnosticoController@update')->name('diagnosticos.update');

    //no patologicos
Route::get('/nopatologicos/paciente/{paciente_id}', 'NoPatologicoController@index')->name('nopatologicos.index');
Route::get('/nopatologicos/create/{paciente_id}', 'NoPatologicoController@create')->name('nopatologicos.create');
Route::post('/nopatologicos/store', 'NoPatologicoController@store')->name('nopatologicos.store');

    //patologias
Route::get('/patologias/paciente/{paciente_id}', 'PatologiaController@index')->name('patologias.index');
Route::get('/patologias/create/{paciente_id}', 'PatologiaController@create')->name('patologias.create');
Route::post('/patologias/store', 'PatologiaController@store')->name('patologias.store');

    //ginecologicos
Route::get('/ginecologicos/paciente/{paciente_id}', 'GinecologicoController@index')->name('ginecologicos.index');
Route::get('/ginecologicos/create/{paciente_id}', 'GinecologicoController@create')->name('ginecologicos.create');
Route::post('/ginecologicos/store', 'GinecologicoController@store')->name('ginecologicos.store');

    //Historial Observaciones
Route::get('/historialObservaciones/paciente/{paciente_id}', 'HitorialObservacionController@index')->name('historialObservaciones.index');
Route::get('/historialObservaciones/create/{paciente_id}', 'HitorialObservacionController@create')->name('historialObservaciones.create');
Route::post('/historialObservaciones/store', 'HitorialObservacionController@store')->name('historialObservaciones.store');

    //actividadfisica
Route::get('/actividadfisica/paciente/{paciente_id}', 'ActividadFisicaController@index')->name('actividadfisica.index');
Route::get('/actividadfisica/create/{paciente_id}', 'ActividadFisicaController@create')->name('actividadfisica.create');
Route::post('/actividadfisica/store', 'ActividadFisicaController@store')->name('actividadfisica.store');

    //consultamedica
Route::get('/consultamedica/paciente/{paciente_id}', 'ConsultaMedicaController@index')->name('consultamedica.index');

    //test postural
    //bipedo posterior
Route::get('/consultamedica/paciente/{paciente_id}/testpostural/bipedoposterior/','TestPosturalController@createBipedoPosterior')->name('bipedoposterior.create');
Route::post('/consultamedica/bipedoposterior/store', 'TestPosturalController@storeBipedoPosterior')->name('bipedoposterior.store');
    //bipedo anterior
Route::get('/consultamedica/paciente/{paciente_id}/testpostural/bipedoanterior/','TestPosturalController@createBipedoAnterior')->name('bipedoanterior.create');
Route::post('/consultamedica/bipedoanterior/store', 'TestPosturalController@storeBipedoAnterior')->name('bipedoanterior.store');
    //latera
Route::get('/consultamedica/paciente/{paciente_id}/testpostural/lateral/','TestPosturalController@createLateral')->name('lateral.create');
Route::post('/consultamedica/lateral/store', 'TestPosturalController@storeLateral')->name('lateral.store');
    //sedente
Route::get('/consultamedica/paciente/{paciente_id}/testpostural/sedente/','TestPosturalController@createSedente')->name('sedente.create');
Route::post('/consultamedica/sedente/store', 'TestPosturalController@storeSedente')->name('sedente.store');
    //marcha
Route::get('/consultamedica/paciente/{paciente_id}/testpostural/marcha/','TestPosturalController@createMarcha')->name('marcha.create');
Route::post('/consultamedica/marcha/store', 'TestPosturalController@storeMarcha')->name('marcha.store');
    //seguimiento
Route::get('/consultamedica/paciente/{paciente_id}/seguimiento','SeguimientoController@create')->name('seguimiento.create');
Route::post('/consultamedica/seguimiento/store', 'SeguimientoController@store')->name('seguimiento.store');

    //reportes
Route::get('/reportes/paciente/{paciente_id}', 'ReporteController@index')->name('reportes.index');
Route::get('/reportes/paciente/{paciente_id}/reporteseguimiento','ReporteController@showReporteSeguimiento')->name('reporte.seguimiento');
Route::get('/reportes/paciente/{paciente_id}/reportehistorialclinico','ReporteController@showReporteHistorialClinico')->name('reporte.historial');


	//citas
Route::get('/agenda', function () {
    return view('citas.agenda');
})->name('citas.agenda');