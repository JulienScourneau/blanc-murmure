<?php

namespace App\Http\Controllers;

use App\Models\Attendees;

class AttendeesController extends Controller
{
    public function show()
    {
        return view('');
    }

    public function store()
    {
        Attendees::create(request()->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email'],
            'stage_id' => ['required'],
            'address' => ['required'],
            'postal_code' => ['required'],
            'city' => ['required'],
            'phone_number' => ['required'],
            'right_to_image' => ['required'],
        ]));
        return redirect('/');
    }
}
