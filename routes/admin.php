<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/dashboard', function () {
    return Inertia::render('Admin/Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::resource('user', 'UserController');
Route::resource('role', 'RoleController');
Route::resource('permission', 'PermissionController');
Route::get('edit-account-info', 'UserController@accountInfo')->name('admin.account.info');
Route::post('edit-account-info', 'UserController@accountInfoStore')->name('admin.account.info.store');
Route::post('change-password', 'UserController@changePasswordStore')->name('admin.account.password.store');

