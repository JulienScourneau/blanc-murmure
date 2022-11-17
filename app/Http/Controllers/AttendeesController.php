<?php

namespace App\Http\Controllers;

use App\Models\Attendees;

class AttendeesController extends Controller
{
    public function index()
    {
        return view('attendees.form');
    }

    public function show()
    {
        return view('');
    }

    public function store()
    {


        $attributes = request()->validate([
            'last_name' => ['required'],
            'first_name' => ['required'],
            'email' => ['required', 'email'],
            'date_birth' => ['required','date'],
            'stage_id' => ['required'],
            'address' => ['required'],
            'postal_code' => ['required'],
            'city' => ['required'],
            'phone_number' => ['required'],
            'right_to_image' => ['required'],
        ]);

//        dd(request()->all());
        Attendees::create($attributes);
        return redirect('/');
    }
}
