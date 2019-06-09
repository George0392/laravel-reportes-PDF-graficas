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