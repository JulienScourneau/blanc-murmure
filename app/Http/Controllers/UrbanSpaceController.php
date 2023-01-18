<?php

namespace App\Http\Controllers;

use App\Models\UrbanSpace;
use App\Models\UrbanSpaceProject;

class UrbanSpaceController extends Controller
{
    public function index()
    {
        return view('projects.urbanspace', [
            'projects' => UrbanSpaceProject::latest()->get()
        ]);
    }

    public function show(UrbanSpaceProject $urbanSpace)
    {
        return view('urbanspace.show', [
            'urbanSpaceProject' => $urbanSpace
        ]);
    }
}
