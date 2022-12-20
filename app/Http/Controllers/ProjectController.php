<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use App\Models\Illustration;
use App\Models\Project;
use App\Models\Sculpture;
use App\Models\UrbanSpaceProject;
use App\Models\Video;

class ProjectController extends Controller
{
    public function index()
    {
        return view('project', [
            'sculptures' => Sculpture::latest()->with('photos')->limit(5)->get(),
            'illustrations' => Illustration::latest()->limit(5)->get(),
            'urbanSpaces' => UrbanSpaceProject::latest()->limit(5)->get(),
            'catalogs' => Catalog::latest()->limit(5)->get(),
            'videos' => Video::select('title','thumbnail','description','link','slug')->latest()->limit(5)->get(),
        ]);
    }
}
