<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index () {
        $projects = Project::all();

        return response()->json($projects);
    }

    public function show ($id) {
        $project = Project::findOrFail($id);

        return response()->json($project);
    }
}
