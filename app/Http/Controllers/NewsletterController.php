<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use SendinBlue\Client\Api\ContactsApi;
use SendinBlue\Client\Configuration;

class NewsletterController extends Controller
{
    public function store()
    {
        request()->validate(['email' => 'required|email']);

        $credentials = Configuration::getDefaultConfiguration()->setApiKey('api-key', env('SENDINBLUE_APIKEY'));

        $apiInstance = new ContactsApi(
            new Client(),
            $credentials
        );

        $createContact = new \SendinBlue\Client\Model\CreateContact([
            'email' => request('email'),
            'updateEnabled' => true,
            'listIds' => [[1, 12]]
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
