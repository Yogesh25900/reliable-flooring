<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FooterContactController extends Controller
{
    public function submit(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Send email
        Mail::to('chaudharyyogesh658@gmail.com')->send(new ContactMail($data));

        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}