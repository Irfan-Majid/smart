<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Artisan;


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

//Software Setup Routes
Route::get('reboot', function () {
    Artisan::call('optimize:clear');
    Artisan::call('view:clear');
    dd('Done');
});


Route::get('/test', function () { return view('slotBookings/test'); });

Auth::routes();

Route::get('/list', function () { return view('indexTest'); });
Route::group(['middleware'=>'auth'], function(){

    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('users', 'UserController');
    Route::resource('permissions', 'PermissionController');
    Route::resource('roles', 'RoleController');
    Route::resource('supplier', 'SupplierController');
    Route::resource('material', 'MaterialController');
    Route::resource('unit', 'UnitController');
    Route::resource('client', 'ClientController');
    Route::post('ajaxCall', 'ClientController@ajaxReceive')->name('ajaxCall');
});
