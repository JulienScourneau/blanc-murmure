<?php

namespace App\Http\Controllers;

use App\Models\Catalog;

class CatalogController extends Controller
{
    public function index()
    {
        return view('projects.catalog', [
            'catalogs' => Catalog::all()
        ]);
    }
}
