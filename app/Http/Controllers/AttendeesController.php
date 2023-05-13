<?php

namespace App\Http\Controllers;

use App\Mail\AttendeesMail;
use App\Mail\InfosMail;
use App\Models\Attendees;
use App\Models\Internship;
use Illuminate\Support\Facades\Mail;

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
        Mail::to(env('MAIL_USERNAME'))->send(new InfosMail());
        Mail::to($attributes['email'])->send(new AttendeesMail());
        Attendees::create($attributes);
        return redirect('/');
    }
}
