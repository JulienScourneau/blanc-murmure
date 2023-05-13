<?php

namespace App\Http\Controllers;

use App\Http\Requests\AttendeesRequest;
use App\Mail\AttendeesMail;
use App\Mail\InfosMail;
use App\Models\Attendees;
use App\Models\Internship;
use Illuminate\Support\Facades\Mail;

class AttendeesController extends Controller
{
    public function index()
    {
        return view('attendees.form', [
            'internships' => Internship::all(),
        ]);
    }

    public function store(AttendeesRequest $request)
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
        $attendees = Attendees::create($attributes);
        Mail::to(env('MAIL_USERNAME'))->send(new InfosMail(
            $attendees->first_name,
            $attendees->last_name,
            $attendees->email,
            $attendees->date_birth,
            $attendees->internship->title,
            $attendees->address,
            $attendees->postal_code,
            $attendees->city,
            $attendees->phone_number,
        ));
        Mail::to($request['email'])->send(new AttendeesMail());
        return redirect('/');
    }
}
