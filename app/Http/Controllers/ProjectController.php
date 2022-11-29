<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use App\Models\Project;
use App\Models\UrbanSpaceProject;
use App\Models\Video;

class ProjectController extends Controller
{
    public function index()
    {
        return view('project', [
            'sculptures' => Project::latest()->with('photos')->where('project_category_id', '=', 1)->limit(5)->get(),
            'illustrations' => Project::latest()->with('photos')->where('project_category_id', '=', 2)->limit(5)->get(),
            'urbanSpaces' => UrbanSpaceProject::latest()->limit(5)->get(),
            'catalogs' => Catalog::latest()->limit(5)->get(),
            'videos' => Video::select('title','thumbnail','description','link')->latest()->limit(5)->get(),
        ]);
    }
}
