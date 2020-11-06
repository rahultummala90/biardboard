<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectsController extends Controller
{
    public function index()
    {
//        $projects = Project::all();
        $projects = auth()->user()->projects;

        return view('projects.index', compact('projects'));
    }

    public function show(Project $project) {

        if (auth()->id() != $project->owner_id) {
            abort(403);
        }

        return view('projects.show', compact('project'));
    }

    public function store()
    {
        Project::create(request(['title', 'description']));
    }
}
