<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        return view('projects.video',[
            'projects' => Video::all()
        ]);
    }
}
