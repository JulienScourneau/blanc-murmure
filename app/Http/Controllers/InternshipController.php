<?php

namespace App\Http\Controllers;

use App\Models\Internship;
use App\Models\NewsPhoto;

class InternshipController extends Controller
{
    public function index()
    {
        return view('news', [
            'internships' => Internship::all(),
            'newsPhoto' => NewsPhoto::all(),
        ]);
    }
}
