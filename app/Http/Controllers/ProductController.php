<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['name' => 'Homogeneous Flooring', 'slug' => 'homogeneous-flooring', 'image' => 'homogeneous-mainpagebg.png'],
            ['name' => 'Sports Flooring', 'slug' => 'sports-flooring', 'image' => 'sportsflooring.png'],
            ['name' => 'Conductive Flooring', 'slug' => 'conductive-flooring', 'image' => 'conductiveflooring.png'],

            ['name' => 'Heterogeneous Flooring', 'slug' => 'heterogeneous-flooring', 'image' => 'luxury-vinyl.jpg'],

            ['name' => 'Luxury Vinyl', 'slug' => 'homogeneous', 'image' => 'luxury-vinyl.jpg'],
            ['name' => 'SPC Flooring', 'slug' => 'homogeneous', 'image' => 'spcflooring.jpg'],
        ];

        return view('home', compact('products'));
    }

    public function show($slug)
{
    // Map slug to Blade views
    $viewMap = [
        'homogeneous-flooring' => 'products.homogeneous',
        'sports-flooring' => 'products.sports',
        'heterogeneous-flooring' => 'products.heterogeneous',

        'conductive-flooring' => 'products.conductive',
        'luxury-vinyl' => 'products.luxury',
        'spc-flooring' => 'products.spc',
    ];

    if (!array_key_exists($slug, $viewMap)) {
        abort(404); // Invalid slug shows 404 page
    }

    return view($viewMap[$slug]);
}

  
}
