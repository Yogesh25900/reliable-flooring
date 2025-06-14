<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
{
    $data = $request->all();

    // Try sending basic raw email
    Mail::raw("This is a test", function($message) {
        $message->to('chaudharyyogesh658@gmail.com')
                ->subject('Test');
    });

    return "SENT"; // Just confirm it doesn't break here
}

}
