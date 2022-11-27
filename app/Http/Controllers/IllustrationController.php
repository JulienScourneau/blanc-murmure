<?php

namespace App\Http\Controllers;

use App\Models\Project;

class IllustrationController extends Controller
{
    public function index()
    {
        return view('projects.illustration', [
            'illustrations' => Project::with('photos')->where('project_category_id','=',1)->get()
        ]);
    }
}
