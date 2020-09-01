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
Route::get('/','InfokerjasamaController@daftar');

// Route::get('/login', function () {
//     return view('auth.login');
// });
Route::get('/login', 'Auth/LoginController@loginpage');

Auth::routes();

Route::get('naskah','NaskahController@index');

Route::post('/naskah/create','NaskahController@create');
Route::get('/infoker','NaskahController@tampilkanNaskah');
Route::get('naskah/status/{id}', 'NaskahController@status');
Route::get('/listAllNaskah/{data}/detail','NaskahController@detail');
Route::get('/listAllNaskah/{data}/edit','NaskahController@edit1');
Route::post('/listAllNaskah/{data}/edit/','NaskahController@edit2');
Route::get('/listAllNaskah/{data}/delete','NaskahController@delete1');
// Route::get('/listAllNaskah/{data}/detail','NaskahController@downfunc');
Route::get('/logout','AuthorizationController@logout');

Route::get('/dashboard','DashboardController@index');
Route::get('delete-data', 'AuthorizationController@deleteData');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('view-data', 'AuthorizationController@viewData');
Route::get('create-data', 'AuthorizationController@createData');
Route::get('edit-data', 'AuthorizationController@editData');
Route::get('update-data', 'AuthorizationController@updateData');
Route::get('delete-data', 'AuthorizationController@deleteData');

Route::get('mitra','MitraController@index');
Route::post('/mitra/create','MitraController@create');
Route::get('/mitras','MitraController@tampilkanMitra');
Route::get('/listAllMitra/{data}/detail','MitraController@detail');

Route::get('/file/{id}/telaah/','FileController@index')->name('telaah');
Route::put('/file/{id}/create/','FileController@create')->name('file.create');
Route::get('/filese/{id}','FileController@tampilkanFile')->name('file.fileelse');
Route::get('/listAllFile/{data}/detail','FileController@detail');

Route::get('/listAllFile/{data}/edit','FileController@edit1');
Route::post('/listAllFile/{data}/edit/','FileController@edit2');
Route::get('/listAllFile/{data}/delete','FileController@delete1');

Route::get('/naskahfinal/{id}','NaskahFinalController@index')->name('nafiltelaah');
Route::put('/naskahfinal/create/{id}','NaskahFinalController@create')->name('nafil.create');
Route::get('/naskahfinals/{id}','NaskahFinalController@tampilkanNaskahFinal')->name('nafil');
Route::get('/listAllNaskahFinals/{dataa}/detail','NaskahFinalController@detail');
Route::get('/listAllNaskahFinals/{dataa}/edit','NaskahFinalController@edit1');
Route::post('/listAllNaskahFinals/{dataa}/edit/','NaskahFinalController@edit2');
Route::get('/listAllNafil/{data}/delete','NaskahFinalController@delete2');

Route::get('/filenafil/{ids}/telaahs/','FileNafilController@index')->name('telaahs');
Route::put('/filenafil/{ids}/create/','FileNafilController@create')->name('filenafil.create');
Route::get('/filenafils/{ids}','FileNafilController@tampilkanFileNafil')->name('filenafil.files');
Route::get('/listAllFilenafil/{data}/detail','FileNafilController@detail');

Route::get('/sendemail', 'SendEmailController@index');

Route::post('/sendemail/send', 'SendEmailController@send');


Route::get('/chart', 'ChartController@index');


Route::get('infokerjasama','InfokerjasamaController@index');
Route::post('/infokerjasama/create','InfokerjasamaController@create');
Route::get('/infokerjasamas','InfokerjasamaController@tampilkanKerjasama');







