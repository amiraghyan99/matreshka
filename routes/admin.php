<?php

use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\IntroController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('user', UserController::class);
Route::resource('role', RoleController::class);
Route::resource('permission', PermissionController::class);

Route::get('edit-account-info', [UserController::class, 'accountInfo'])->name('admin.account.info');
Route::post('edit-account-info', [UserController::class, 'accountInfoStore'])->name('admin.account.info.store');

Route::post('change-password', [UserController::class, 'changePasswordStore'])->name('admin.account.password.store');

Route::resource('intro', IntroController::class);

Route::resource('gallery', GalleryController::class);
Route::put('gallery/{gallery}/move', [GalleryController::class, 'move'])->name('gallery.move');

Route::get('/test', function () {
//    Update
//    return Intro::first()->update([
//        'title' => [
//            'en' => 'QQWE',
//            'ru' => 'QQWERui'
//        ]
//    ]);

//    Create
//    return Intro::create([
//        'title' =>[
//            'en' => 'Title En',
//            'ru' => 'Title Ru',
//        ],
//        'description' =>[
//            'en' => 'Desc En',
//            'ru' => 'Desc Ru',
//        ],
//    ]);
});
