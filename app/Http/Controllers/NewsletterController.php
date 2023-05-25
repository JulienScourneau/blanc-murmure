<?php

namespace App\Http\Controllers;

use Exception;
use GuzzleHttp\Client;
use SendinBlue\Client\Api\ContactsApi;
use SendinBlue\Client\Configuration;
use SendinBlue\Client\Model\CreateContact;

class NewsletterController extends Controller
{
    public function store()
    {
        $attributes = request()->validate(['email' => 'required']);

        $credentials = Configuration::getDefaultConfiguration()->setApiKey('api-key', config('newsletter.api_key'));

        $apiInstance = new ContactsApi(
            new Client(),
            $credentials
        );
        $createContact = new CreateContact([
            'email' => $attributes['email'],
        ]);


        try {
            $apiInstance->createContact($createContact);

        } catch (Exception $e) {
            \Illuminate\Validation\ValidationException::withMessages([
                'email' => "Une erreur est survenu lors de l'ajout à la newsletter"
            ]);
        }
        return redirect('/')
            ->with('success', 'inscription réussi');
    }

}
