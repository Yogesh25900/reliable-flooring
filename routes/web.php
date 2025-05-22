<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomogeneousController;
use App\Http\Controllers\HeterogeneousController;
use App\Http\Controllers\FooterContactController;


Route::get('/Homogeneous', [HomogeneousController::class, 'index']);


Route::get('/', [HomeController::class, 'index']);




Route::get('/', [ProductController::class, 'index'])->name('home');

Route::view('/products/homogeneous', 'products.homogeneous');
Route::redirect('/products/luxury-vinyl', '/products/homogeneous');
Route::redirect('/products/spc-flooring', '/products/homogeneous');



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
