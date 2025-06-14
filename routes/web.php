<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomogeneousController;
use App\Http\Controllers\HeterogeneousController;
use App\Http\Controllers\FooterContactController;
use App\Http\Controllers\SportsFlooringController;
use App\Http\Controllers\ConductiveController;


Route::get('/Homogeneous', [HomogeneousController::class, 'index']);


Route::get('/', [HomeController::class, 'index']);



use Illuminate\Support\Facades\Route;

// ✅ Homepage
Route::get('/', [ProductController::class, 'index'])->name('home');

// ✅ Dynamic product detail page (e.g., /products/sports-flooring)
Route::get('/products/{slug}', [ProductController::class, 'show'])->name('products.show');

Route::post('/footer-contact', [FooterContactController::class, 'submit'])->name('footer.contact');


use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;


Route::get('/generate-sitemap', function () {
    Sitemap::create()
        ->add(Url::create('/'))
        ->add(Url::create('/products/homogeneous'))
        ->add(Url::create('/products/luxury-vinyl'))
        ->add(Url::create('/products/spc-flooring'))
        ->writeToFile(public_path('sitemap.xml'));

    return 'Sitemap generated!';
});



Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');




