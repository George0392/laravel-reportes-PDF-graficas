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

// Route::get('/', function () {
//     return view('welcome');
// });

// redireccionar a url blog
Route::get('/', function () {
    return redirect()->route('estadisticas');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function(){

// ************************************************************
// *
// *				Permisos para los Roles
// *
// ************************************************************

// listado
Route::get('roles','RoleController@index')->name('roles.index')->middleware('permission:roles.index');

// creacion
Route::get('roles/create','RoleController@create')->name('roles.create')->middleware('permission:roles.create');

// no tiene permiso de crear sino puede ver el formulario
Route::post('roles/store','RoleController@store')->name('roles.store')->middleware('permission:roles.create');

// edicion
Route::get('roles/{roles}/edit','RoleController@edit')->name('roles.edit')->middleware('permission:roles.edit');

// actualizacion
Route::put('roles/{roles}','RoleController@update')->name('roles.update')->middleware('permission:roles.edit');

// mostrar detalle
Route::get('roles/{roles}','RoleController@show')->name('roles.show')->middleware('permission:roles.show');

// eliminar
Route::delete('roles/{roles}','RoleController@destroy')->name('roles.destroy')->middleware('permission:roles.destroy');

// ************************************************************
// *
// *				Tabla de permisos
// *
// ************************************************************

// listado
Route::get('permisos','PermissionController@index')->name('permisos.index')->middleware('permission:permisos.index');

// creacion
Route::get('permisos/create','PermissionController@create')->name('permisos.create')->middleware('permission:permisos.create');

// no tiene permiso de crear sino puede ver el formulario
Route::post('permisos/store','PermissionController@store')->name('permisos.store')->middleware('permission:permisos.create');

// actualizacion
Route::put('permisos/{permisos}','PermissionController@update')->name('permisos.update')->middleware('permission:permisos.edit');

// edicion
Route::get('permisos/{permisos}/edit','PermissionController@edit')->name('permisos.edit')->middleware('permission:permisos.edit');

// mostrar detalle
Route::get('permisos/{permisos}','PermissionController@show')->name('permisos.show')->middleware('permission:permisos.show');

// eliminar
Route::delete('permisos/{permisos}','PermissionController@destroy')->name('permisos.destroy')->middleware('permission:permisos.destroy');

// ************************************************************
// *
// *				Permisos para los usuarios
// *
// ************************************************************

// listado
Route::get('user','UsersController@index')->name('users.index')->middleware('permission:users.index');

// creacion
Route::get('user/create','UsersController@create')->name('users.create')->middleware('permission:users.create');

// no tiene permiso de crear sino puede ver el formulario
Route::post('user/store','UsersController@store')->name('users.store')->middleware('permission:users.create');

// edicion
Route::get('user/{users}/edit','UsersController@edit')->name('users.edit')->middleware('permission:users.edit');

// actualizacion
Route::put('user/{users}','UsersController@update')->name('users.update')->middleware('permission:users.edit');

// mostrar detalle
Route::get('user/{users}','UsersController@show')->name('users.show')->middleware('permission:users.show');

// eliminar
Route::delete('user/{users}','UsersController@destroy')->name('users.destroy')->middleware('permission:users.destroy');

// ************************************************************
// *
// *				Permisos para los medicos
// *
// ************************************************************

// listado
Route::get('medicos','MedicoController@index')->name('medicos.index')->middleware('permission:medicos.index');

// creacion
Route::get('medicos/create','MedicoController@create')->name('medicos.create')->middleware('permission:medicos.create');

// no tiene permiso de crear sino puede ver el formulario
Route::post('medicos/store','MedicoController@store')->name('medicos.store')->middleware('permission:medicos.create');

// actualizacion
Route::put('medicos/{medicos}','MedicoController@update')->name('medicos.update')->middleware('permission:medicos.edit');

// edicion
Route::get('medicos/{medicos}/edit','MedicoController@edit')->name('medicos.edit')->middleware('permission:medicos.edit');

// mostrar detalle
Route::get('medicos/{medicos}','MedicoController@show')->name('medicos.show')->middleware('permission:medicos.show');

//Imprimir PDF
Route::get('medicos/{medicos}/descargarpdf','MedicoController@exportarpdf')->name('medicos.pdf')->middleware('permission:medicos.show');

// eliminar
Route::delete('medicos/{medicos}','MedicoController@destroy')->name('medicos.destroy')->middleware('permission:medicos.destroy');


// ************************************************************
// *
// *				Permisos para los pacientes
// *
// ************************************************************

// listado
Route::get('pacientes','PacienteController@index')->name('pacientes.index')->middleware('permission:pacientes.index');

// creacion
Route::get('pacientes/create','PacienteController@create')->name('pacientes.create')->middleware('permission:pacientes.create');

// no tiene permiso de crear sino puede ver el formulario
Route::post('pacientes/store','PacienteController@store')->name('pacientes.store')->middleware('permission:pacientes.create');

// actualizacion
Route::put('pacientes/{pacientes}','PacienteController@update')->name('pacientes.update')->middleware('permission:pacientes.edit');

// edicion
Route::get('pacientes/{pacientes}/edit','PacienteController@edit')->name('pacientes.edit')->middleware('permission:pacientes.edit');

// mostrar detalle
Route::get('pacientes/{pacientes}','PacienteController@show')->name('pacientes.show')->middleware('permission:pacientes.show');

//Imprimir PDF
Route::get('pacientes/{pacientes}/descargarpdf','PacienteController@exportarpdf')->name('pacientes.pdf')->middleware('permission:pacientes.show');

// eliminar
Route::delete('pacientes/{pacientes}','PacienteController@destroy')->name('pacientes.destroy')->middleware('permission:pacientes.destroy');

// ************************************************************
// *
// *				Permisos para los consultorios
// *
// ************************************************************

// listado
Route::get('consultorios','ConsultorioController@index')->name('consultorios.index')->middleware('permission:consultorios.index');

// creacion
Route::get('consultorios/create','ConsultorioController@create')->name('consultorios.create')->middleware('permission:consultorios.create');

// no tiene permiso de crear sino puede ver el formulario
Route::post('consultorios/store','ConsultorioController@store')->name('consultorios.store')->middleware('permission:consultorios.create');

// actualizacion
Route::put('consultorios/{consultorios}','ConsultorioController@update')->name('consultorios.update')->middleware('permission:consultorios.edit');

// edicion
Route::get('consultorios/{consultorios}/edit','ConsultorioController@edit')->name('consultorios.edit')->middleware('permission:consultorios.edit');

// mostrar detalle
Route::get('consultorios/{consultorios}','ConsultorioController@show')->name('consultorios.show')->middleware('permission:consultorios.show');

// eliminar
Route::delete('consultorios/{consultorios}','ConsultorioController@destroy')->name('consultorios.destroy')->middleware('permission:consultorios.destroy');

//Imprimir PDF
Route::get('consultorios/{consultorios}/descargarpdf','ConsultorioController@exportarpdf')->name('consultorios.pdf')->middleware('permission:consultorios.show');

// ************************************************************
// *
// *				Permisos para los control
// *
// ************************************************************

// listado
Route::get('control','ControlController@index')->name('control.index')->middleware('permission:control.index');

// creacion
Route::get('control/create','ControlController@create')->name('control.create')->middleware('permission:control.create');

// no tiene permiso de crear sino puede ver el formulario
Route::post('control/store','ControlController@store')->name('control.store')->middleware('permission:control.create');

// actualizacion
Route::put('control/{control}','ControlController@update')->name('control.update')->middleware('permission:control.edit');

// edicion
Route::get('control/{control}/edit','ControlController@edit')->name('control.edit')->middleware('permission:control.edit');

// mostrar detalle
Route::get('control/{control}','ControlController@show')->name('control.show')->middleware('permission:control.show');

// eliminar
Route::delete('control/{control}','ControlController@destroy')->name('control.destroy')->middleware('permission:control.destroy');

//Imprimir PDF
Route::get('control/{control}/descargarpdf','ControlController@exportarpdf')->name('control.pdf')->middleware('permission:control.show');

// ************************************************************
// *
// *				Permisos para los medicamento
// *
// ************************************************************

// listado
Route::get('medicamento','MedicamentoController@index')->name('medicamentos.index')->middleware('permission:medicamentos.index');

// creacion
Route::get('medicamento/create','MedicamentoController@create')->name('medicamentos.create')->middleware('permission:medicamentos.create');

// no tiene permiso de crear sino puede ver el formulario
Route::post('medicamento/store','MedicamentoController@store')->name('medicamentos.store')->middleware('permission:medicamentos.create');

// actualizacion
Route::put('medicamento/{medicamento}','MedicamentoController@update')->name('medicamentos.update')->middleware('permission:medicamentos.edit');

// edicion
Route::get('medicamento/{medicamento}/edit','MedicamentoController@edit')->name('medicamentos.edit')->middleware('permission:medicamentos.edit');

// mostrar detalle
Route::get('medicamento/{medicamento}','MedicamentoController@show')->name('medicamentos.show')->middleware('permission:medicamentos.show');

// eliminar
Route::delete('medicamento/{medicamento}','MedicamentoController@destroy')->name('medicamentos.destroy')->middleware('permission:medicamentos.destroy');

//Imprimir PDF
Route::get('medicamento/{medicamento}/descargarpdf','MedicamentoController@exportarpdf')->name('medicamentos.pdf')->middleware('permission:medicamentos.show');

// ************************************************************
// *
// *                Permisos para los entregas
// *
// ************************************************************

// listado
Route::get('entregas','EntregaController@index')->name('entregas.index')->middleware('permission:entregas.index');

// creacion
Route::get('entregas/create','EntregaController@create')->name('entregas.create')->middleware('permission:entregas.create');

// no tiene permiso de crear sino puede ver el formulario
Route::post('entregas/store','EntregaController@store')->name('entregas.store')->middleware('permission:entregas.create');

// actualizacion
Route::put('entregas/{entregas}','EntregaController@update')->name('entregas.update')->middleware('permission:entregas.edit');

// edicion
Route::get('entregas/{entregas}/edit','EntregaController@edit')->name('entregas.edit')->middleware('permission:entregas.edit');

// mostrar detalle
Route::get('entregas/{entregas}','EntregaController@show')->name('entregas.show')->middleware('permission:entregas.show');

// eliminar
Route::delete('entregas/{entregas}','EntregaController@destroy')->name('entregas.destroy')->middleware('permission:entregas.destroy');

//Imprimir PDF
Route::get('entregas/{entregas}/descargarpdf','EntregaController@exportarpdf')->name('entregas.pdf')->middleware('permission:entregas.show');

// ************************************************************
// *
// *				Permisos para Estadisticas
// *
// ************************************************************

// listado
Route::get('graficas/consultas_mes','EstadisticasController@index')->name('estadisticas');
Route::get('graficas/estadisticas','EstadisticasController@graficas');



});

