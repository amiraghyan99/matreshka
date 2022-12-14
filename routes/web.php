<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Intervention\Image\ImageCache;

Route::get('/', function () {
    $locale = session('locale') ?? app()->currentLocale();

    return redirect()->route('home', $locale);
});

Route::get('images', function (\Illuminate\Http\Request $request ){
    $src = $request->get('src');
    $width = $request->get('w');
    $height = $request->get('h');

    if (!Storage::fileExists($src)) return null;

    $cacheImage = Image::cache(function(ImageCache $img) use ($src, $width, $height) {

        return $img->make(Storage::path($src));
    }, null, true);
    return Image::make($cacheImage)->response('jpg');

})->name('cache-image');

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
