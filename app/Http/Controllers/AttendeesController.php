<?php

namespace App\Http\Controllers;

use App\Models\Attendees;
use App\Models\Internship;

class AttendeesController extends Controller
{
    public function index()
    {
        return view('attendees.form',[
            'internships'=>Internship::all(),
        ]);
    }

    public function store()
    {
        $attributes = request()->validate([
            'last_name' => ['required'],
            'first_name' => ['required'],
            'email' => ['required', 'email'],
            'date_birth' => ['required', 'date'],
            'internship_id' => ['required'],
            'address' => ['required'],
            'postal_code' => ['required'],
            'city' => ['required'],
            'phone_number' => ['required'],
            'right_to_image' => ['required'],
        ]);

        Attendees::create($attributes);
        return redirect('/');
    }
}
