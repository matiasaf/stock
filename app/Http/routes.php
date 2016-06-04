<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/





Route::get('/',[

		'uses' =>'ArticuloController@getIndex',
		'as' =>'index'
	]);


Route::post('/buscar',[

		'uses' => 'ArticuloController@postBuscarArticulo',
		'as' =>'buscar'
		
	]);




Route::get('/agregar',[

		'uses' => 'ArticuloController@verVistaAgregarArticulo',
		'as' =>'agregar'

	]);



Route::post('/nuevo',[

		'uses' => 'ArticuloController@postAgregarArticulo',
		'as' =>'nuevo'

	]);



Route::post('/vender',[

		'uses' =>'ArticuloController@postVenderArticulo',
		'as' => 'vender'

	]);

Route::post('/editar_precio',[

		'uses' =>'ArticuloController@postEditarPrecio',
		'as' => 'editar_precio'

	]);






Route::get('/eliminar/{id}',[

	'uses' => 'ArticuloController@getEliminarArticuloAjax',
	'as' => 'eliminar'

	]);


Route::get('/vendidos',[

		'uses' => 'ArticuloController@getMostrarVendidos',
		'as' =>'vendidos'

	]);



Route::get('/ventas',[

		'uses' => 'ArticuloController@getMostrarVentas',
		'as' =>'ver_ventas'

	]);



Route::get('/stock',[

		'uses' => 'ArticuloController@getMostrarArticulos',
		'as' =>'ver_stock'

	]);

Route::auth();
