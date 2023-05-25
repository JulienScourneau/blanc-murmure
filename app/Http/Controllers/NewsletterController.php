<?php

namespace App\Http\Controllers;

use Exception;
use GuzzleHttp\Client;
use SendinBlue\Client\Api\ContactsApi;
use SendinBlue\Client\Configuration;

class NewsletterController extends Controller
{
    public function store()
    {
        request()->validate(['email' => 'required|email']);

        $config = Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

        $apiInstance = new ContactsApi(
        // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
        // This is optional, `GuzzleHttp\Client` will be used as default.
            new Client(),
            $config
        );
        $createContact = new \SendinBlue\Client\Model\CreateContact(); // \SendinBlue\Client\Model\CreateContact | Values to create a contact
        $createContact['email'] = 'john@doe.com';

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
