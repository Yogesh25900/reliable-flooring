<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeterogeneousController extends Controller
{
    public function show()
    {
        // Just return the view directly, no data needed
        return view('heterogeneous');
    }
}