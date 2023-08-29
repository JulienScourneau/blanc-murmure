<?php

namespace App\Http\Controllers;

use App\Models\Internship;
use App\Models\NewsPhoto;

class InternshipController extends Controller
{
    public function index()
    {
        return view('news', [
            'internships' => $this->sortInternshipsByStartDate(Internship::all()),
            'newsPhoto' => NewsPhoto::all(),
        ]);
    }

    function sortInternshipsByStartDate($internships)
    {
        return $internships->sortBy('begin_at');
    }
}
