<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api'], function($router){

	$router->get('/chart/unit-pengelola', 'Chart\UnitController@index');
	$router->get('/chart/status-kerjasama', 'Chart\StatusKerjasamaController@index');
	$router->get('/status_chart', 'ChartStatusKerjasamaController@status');
	$router->get('/unit_chart', 'PieChartUnitController@index');
	$router->get('/infoker_chart', 'ChartInfokerController@infoker');
	$router->get('/naskah_chart', 'ChartNaskahController@naskah');

});