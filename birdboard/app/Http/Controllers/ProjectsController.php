<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectsController extends Controller
{
    public function index()
    {
        $this->redirect('/projects');
    }

    public function store()
    {
        Project::create(request(['title', 'description']));
    }
}
