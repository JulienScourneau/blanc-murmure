<?php

namespace App\Http\Controllers;

use App\Models\Video;

class VideoController extends Controller
{
    public function index()
    {
        return view('projects.video', [
            'videos' => Video::all()
        ]);
    }

    public function show(Video $video)
    {
        return view('video_details', [
            'video' => $video
        ]);
    }
}
