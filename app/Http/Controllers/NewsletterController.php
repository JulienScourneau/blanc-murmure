<?php

namespace App\Http\Controllers;

use Exception;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Mail;
use SendinBlue\Client\Api\ContactsApi;
use SendinBlue\Client\Configuration;
use SendinBlue\Client\Model\CreateContact;

class NewsletterController extends Controller
{
    public function submitNewsletter()
    {
        Mail::to(env('MAIL_USERNAME'))->send(new NewsletterController());
    }

}
