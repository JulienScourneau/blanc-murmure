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
        //TODO: Add a limit for each project
        return view('project', [
            'projects' => Project::with('category','photos')->get(),
            'urbanSpaces' => UrbanSpaceProject::all(),
            'catalogs' => Catalog::all(),
            'videos' => Video::all(),
        ]);
    }
}
