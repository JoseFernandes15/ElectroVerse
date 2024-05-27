<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;


    function setLang(){
        if(session('locale')){
            $locale=session('locale');
            App::setLocale($locale);
        }
    };
    Route::get('/', function () {
        setLang();
        return view('home');
    })->name('home');

    Route::get('/product', function () {
        setLang();
        return view('product');
    })->name('product');

    Route::get('/shop', function () {
        setLang();
        return view('shop');
    })->name('shop');

    Route::get('/setlocale/{locale}', function (string $locale) {
        if (! in_array($locale, ['en', 'pt', 'es'])) {
            print 'Invalid locale';
            abort(400);
        }
        
        session()->put('locale', $locale);
        App::setLocale($locale);
        return redirect()->back();
    })->name('setLocale');