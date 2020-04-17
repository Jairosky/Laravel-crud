<?php

Route::get('/','pagecontroller@laravel')->name('notas');

Route::get('/detalle/{id}', 'pagecontroller@detalle')->name('notas.detalle');

Route::post('/', 'pagecontroller@crear')->name('notas.crear');

Route::get('/editar/{id}', 'pagecontroller@editar' )->name('notas.editar');

Route::put('/editar/{id}', 'pagecontroller@update' )->name('notas.update');

Route::delete('/eliminar/{id}', 'pagecontroller@eliminar')->name('notas.eliminar');

Route::get('Principal', 'pagecontroller@Principal')->name('inicio');

Route::get('Fotografias','pagecontroller@fotografias')->name('fotos');

Route::get('Nosotros/{nombre?}','pagecontroller@Nosotros')->name('nosotros');



