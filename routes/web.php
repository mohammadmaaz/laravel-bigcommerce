<?php

use Folio3\LaravelBigcommerceApp\Http\Controllers\MainController;
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
Route::group(['middleware' => ['web']], function () {
    Route::get('/{url?}', function () {
        return view('welcome');
    })->where('', 'list');
    
    Route::group(['prefix' => 'auth'], function () {
        Route::get('install', [MainController::class, 'install']);
    
        Route::get('load', [MainController::class, 'load']);
    
        Route::get('uninstall', function () {
            echo 'uninstall';
            return app()->version();
        });
    
        Route::get('remove-user', function () {
            echo 'remove-user';
            return app()->version();
        });
    });
    
    Route::any('/bc-api/{endpoint}', [MainController::class, 'proxyBigCommerceAPIRequest'])
        ->where('endpoint', 'v2\/.*|v3\/.*');
});
