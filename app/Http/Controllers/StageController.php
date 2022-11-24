<?php

namespace App\Http\Controllers;

use App\Models\Internship;

class StageController extends Controller
{
    public function index()
    {
        return view('news', [
            'stages' => Internship::all()
        ]);
    }
}
