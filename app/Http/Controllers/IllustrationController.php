<?php

namespace App\Http\Controllers;

use App\Models\Illustration;
use App\Models\Project;

class IllustrationController extends Controller
{
    public function index()
    {
        return view('projects.illustration', [
            'illustrations' => Illustration::latest()->paginate(5)
        ]);
    }
}
