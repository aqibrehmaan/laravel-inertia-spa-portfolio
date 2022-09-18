<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return Inertia::render('Projects/All', [
            'projects' => Project::all(),
        ]);
    }
}
