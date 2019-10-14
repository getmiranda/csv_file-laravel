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

Route::get('csv_file', 'CSVFileController@index');

Route::get('csv_file/export', 'CSVFileController@csv_export')->name('export');

Route::post('csv_file/import', 'CSVFileController@csv_import')->name('import');
