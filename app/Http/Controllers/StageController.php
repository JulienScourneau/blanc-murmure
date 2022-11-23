<?php

namespace App\Http\Controllers;

use App\Models\Stage;

class StageController extends Controller
{
    public function index()
    {
        return view('news', [
            'stages' => Stage::all()
        ]);
    }
}
