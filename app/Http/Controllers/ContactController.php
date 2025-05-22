<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        // Validate input
        $request->validate([
            'name' => 'required',
            'message' => 'required',
        ]);

        // Save to database
        Contact::create([
            'name' => $request->name,
            'message' => $request->message,
        ]);

        return redirect('/contact')->with('success', 'Message sent!');
    }
}
