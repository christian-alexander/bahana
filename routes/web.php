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

Route::get('/form-audit-cargo', 'SoundingCargo@show');
Route::post('/form-audit-cargo', 'SoundingCargo@save');

Route::get('/form-audit-tanki', 'AuditTankiController@show');
Route::post('/form-audit-tanki', 'AuditTankiController@save');
