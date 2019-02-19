<?php


Route::get('/', 'HomeController@gethome');

Route::get('/catalog', 'CatalogController@getIndex');

Route::get('/catalog/create', 'CatalogController@getCreate');

Route::get('/catalog/login', 'CatalogController@getLogin');

Route::get('/catalog/show/{id}', 'CatalogController@getShow');

Route::get('/catalog/edit/{id}', 'CatalogController@getEdit');
