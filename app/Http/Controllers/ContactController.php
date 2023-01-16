<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\VisitorContact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact', []);
    }

    public function submitContactForm(ContactRequest $request)
    {
        Mail::to('julienscourneau@gmail.com')->send(new VisitorContact($request->name, $request->email, $request->reason, $request->message));

        return to_route('contact');
    }
}
