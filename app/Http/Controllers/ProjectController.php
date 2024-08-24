<?php

namespace App\Http\Controllers;

use App\Services\ProjectServices;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function __construct(
        protected ProjectServices $service
    ) {
        $this->service = $service;
    }

    public function index()
    {
        $projects = $this->service->getAllProjects();

        return view('projects.index', compact('projects'));
    }
}
