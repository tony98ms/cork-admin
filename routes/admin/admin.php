<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', 'Admin\AdminController@index')->name('admin.index');
    Route::get('/mi-perfil', 'Admin\AdminController@perfil')->name('admin.perfil.me');

    //RUTAS DE CLIENTES, PROVEEDORES Y USUARIOS
    Route::group(['middleware' => ['role_or_permission:super-admin|usuarios']], function () {
        Route::get('/users', 'Admin\UserController@index')->name('admin.users.index');
    });
});
