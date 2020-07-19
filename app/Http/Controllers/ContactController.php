<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    //
    public function contact_us(Request $request)
    {
        $data = array(
            'name' => $request['name'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'message' => $request['message']
        );
        Mail::to('contact@worldxchangetrade.com')->send(new ContactMail($data));
        return back()->with('success', 'Your Message has been successfully sent we will get back to you shortly!');
    }
    
}
