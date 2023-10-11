<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewslettersRequest;
use App\Mail\NewslettersMail;
use Illuminate\Support\Facades\Mail;

class NewsletterController extends Controller
{
    public function submitNewsletter(NewslettersRequest $request)
    {
        Mail::to(env('MAIL_USERNAME'))->send(new NewslettersMail($request['email']));

        return url()->previous();
    }

}
