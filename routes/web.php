<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Intervention\Image\ImageCache;

Route::get('/', function () {
    $locale = session('locale') ?? app()->currentLocale();

    return redirect()->route('home', $locale);
});

Route::get('images', function (\Illuminate\Http\Request $request) {
    $src = $request->get('src');
    $quantity = $request->get('quantity');
    $width = $request->get('w');
    $height = $request->get('h');

    if (!Storage::fileExists($src)) return 'File Not Found';

    $cacheImage = Image::cache(function (ImageCache $img) use ($src, $quantity, $width, $height) {

        $img = $img->make(Storage::path($src));
        if ($width || $height){
            $img->resize($width, $height, fn($constraint) => $constraint->aspectRatio());
        }
        return $img;
    });


    return Image::make($cacheImage)->response('jpg', $quantity);

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
