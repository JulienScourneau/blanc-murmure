<?php

namespace App\Http\Controllers;

use App\Models\Project;

class SculptureController extends Controller
{
    public function index()
    {
        return view('projects.sculpture',[
            'sculptures' => Project::with('photos')->where('project_category_id','=',2)->get()
        ]);
    }
}
