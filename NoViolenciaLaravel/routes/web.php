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
    return view('auth.login');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// code
Route::group([
    'prefix' => 'codes',
], function () {
    Route::get('/', 'CodeController@index')
        ->name('codes.code.index');
});

Route::group([
    'prefix' => 'familyCircles',
], function () {
    Route::get('/', 'FamilyCircleController@index')
        ->name('familyCircles.family.index');
    Route::post('/', 'FamilyCircleController@store')
        ->name('familyCircles.family.store');
});



