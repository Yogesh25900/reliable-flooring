<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SportsFlooringController extends Controller
{
    //
      public function index()
    {
    return view('products.sports');  // ✅ Matches resources/views/product/sport.blade.php
    }
}
