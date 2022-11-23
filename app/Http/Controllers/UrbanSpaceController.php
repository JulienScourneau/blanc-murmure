<?php

namespace App\Http\Controllers;

use App\Models\UrbanSpace;

class UrbanSpaceController extends Controller
{
    public function index()
    {
        return view('projects.urbanspace', [
            'projects' => UrbanSpace::all()
            ]);
    }
}
