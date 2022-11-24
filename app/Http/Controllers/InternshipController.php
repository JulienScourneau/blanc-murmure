<?php

namespace App\Http\Controllers;

use App\Models\Internship;

class InternshipController extends Controller
{
    public function index()
    {
        return view('news', [
            'internships' => Internship::all()
        ]);
    }
}
