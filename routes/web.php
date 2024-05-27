<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Middleware\GetLocale;


Route::middleware([GetLocale::class])->group(function () {
    Route::get('/', function () {
        
        return view('home');
    })->name('home');

    Route::get('/product', function () {
        
        return view('product');
    })->name('product');

    Route::get('/shop', function () {
        
        return view('shop');
    })->name('shop');
});
    Route::get('/setlocale/{locale}', function (string $locale) {
        if (! in_array($locale, ['en', 'pt', 'es'])) {
            print 'Invalid locale';
            abort(400);
        }
        
        session()->put('locale', $locale);
        App::setLocale($locale);
        return redirect()->back();
    })->name('setLocale');