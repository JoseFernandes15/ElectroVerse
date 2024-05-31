<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Middleware\GetLocale;
use App\Http\Controllers\ProductController;

Route::middleware([GetLocale::class])->group(function () {

    Route::get('/', [ProductController::class, 'index'])->name('home');
    Route::get('/shop', [ProductController::class, 'shop'])->name('shop');
    Route::get('/shop/{type}', [ProductController::class, 'product_by_categories'])->name('shop_categorie');
    Route::get('/shop/brand/{brand}', [ProductController::class, 'product_by_brand'])->name('shop_brand');
    Route::get('/sales', [ProductController::class, 'onSale'])->name('sales');
    Route::get('/product/{id}', [ProductController::class, 'show'])->name('product');
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




    
