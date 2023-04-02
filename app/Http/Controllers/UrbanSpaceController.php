<?php

namespace App\Http\Controllers;

use App\Models\UrbanSpaceProject;

class UrbanSpaceController extends Controller
{
    public function index()
    {
        return view('projects.urbanspace', [
            'projects' => UrbanSpaceProject::latest()->paginate(5),
            'last' => UrbanSpaceProject::latest()->first()
        ]);
    }

    public function show(UrbanSpaceProject $urbanSpace)
    {
        return view('urbanspace.show', [
            'urbanSpaceProject' => $urbanSpace
        ]);
    }
}
