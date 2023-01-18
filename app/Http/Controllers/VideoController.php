<?php

namespace App\Http\Controllers;

use App\Models\Video;

class VideoController extends Controller
{
    public function index()
    {
        return view('projects.video', [
            'videos' => Video::latest()->get()
        ]);
    }

    public function show(Video $video)
    {
        return view('projects.video-details', [
            'video' => $video
        ]);
    }
}
