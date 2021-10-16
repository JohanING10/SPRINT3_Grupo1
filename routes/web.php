<?php
//Index
Route::get('/', 'PageController@home')->name('home');
//Pagina de Contacto
Route::get('contacto', 'PageController@contact')->name('portafolio');
//Pagina de Nosotros
Route::get('nosotros', 'PageController@aboutUs')->name('aboutUs');

