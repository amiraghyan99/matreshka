<?php

use App\Http\Controllers\HomeController;

Route::get('/', function () {
    $locale = session('locale') ?? app()->currentLocale();

    return redirect()->route('home', $locale);
});

Route::get('locale/{locale}', function ($locale) {
    $availableLanguages = config('app.available_locales');

    if (isset($locale) && array_key_exists($locale, $availableLanguages)) {
        session()->put('locale', $locale);
        app()->setLocale($locale);
    }

    return redirect()->route('home', $locale);
})->name('localization');

Route::middleware('set-locale')
    ->prefix('{locale?}')
    ->where(['locale' => '[a-zA-Z]{2}'])
    ->group(function () {
        Route::get('/', HomeController::class)->name('home');
    });
