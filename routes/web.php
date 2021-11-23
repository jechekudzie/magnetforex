<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/admin', function () {
    return view('admin.index');
});

Route::resource('/admin/services', 'ServicesController');
Route::resource('/admin/items', 'ItemsController');

Route::get('/admin/service_packages/{service}', 'ServicePackagesController@index');
Route::get('/admin/service_packages/{service}/create', 'ServicePackagesController@create');
Route::post('/admin/service_packages/{service}/store', 'ServicePackagesController@store');
Route::get('/admin/service_packages/{service}/edit', 'ServicePackagesController@edit');
Route::patch('/admin/service_packages/{service}/update', 'ServicePackagesController@update');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
