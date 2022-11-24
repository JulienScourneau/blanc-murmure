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
            'sculptures' => Project::with('photos')->where('project_category_id', '=', 1)->limit(5)->get(),
            'illustrations' => Project::with('photos')->where('project_category_id', '=', 2)->limit(5)->get(),
            'urbanSpaces' => UrbanSpaceProject::limit(5)->get(),
            'catalogs' => Catalog::limit(5)->get(),
            'videos' => Video::limit(5)->get(),
        ]);
    }
}
