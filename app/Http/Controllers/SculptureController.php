<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Sculpture;

class SculptureController extends Controller
{
    public function index()
    {
        return view('projects.sculpture',[
            'sculptures' => Sculpture::all()
        ]);
    }
}
