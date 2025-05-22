<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['name' => 'Homogeneous Flooring', 'slug' => 'homogeneous', 'image' => 'homogeneous-mainpagebg.png'],
            ['name' => 'Luxury Vinyl', 'slug' => 'homogeneous', 'image' => 'luxury-vinyl.jpg'],
            ['name' => 'SPC Flooring', 'slug' => 'homogeneous', 'image' => 'spcflooring.jpg'],
        ];

        return view('home', compact('products'));
    }

  
}
