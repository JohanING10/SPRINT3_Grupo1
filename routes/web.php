<?php
//Index
Route::get('/', 'PageController@home')->name('home');
//Pagina de Contacto
Route::get('contacto', 'PageController@contact')->name('contacto');
//Pagina de Portafolio
Route::get('Portafolio', 'PageController@portafolio')->name('portafolio');
//Pagina de Nosotros
Route::get('nosotros', 'PageController@aboutUs')->name('aboutUs');

