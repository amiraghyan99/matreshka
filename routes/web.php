<?php

use App\Http\Controllers\HomeController;

Route::middleware('set-locale')
    ->prefix('{locale}')
    ->where(['locale' => '[a-zA-Z]{2}'])
    ->group(function () {

});
Route::get('language/{locale}', function ($locale) {
    $availableLanguages = config('app.available_locales');

    if (in_array($locale, $availableLanguages)) {
        session()->put('locale', $locale);
        app()->setLocale($locale);
    }

    return back();
})->name('localization');

Route::get('/', HomeController::class)
    ->name('home');


Route::get('/{locale?}', function ($locale){
    if (isset($locale) && in_array($locale, config('app.available_locales'))) {
        app()->setLocale($locale);
    }
    return redirect()->route('home');

});
