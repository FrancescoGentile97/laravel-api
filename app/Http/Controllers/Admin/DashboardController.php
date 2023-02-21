<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Project;
use App\Models\Type;

class DashboardController extends Controller
{
    public function home() {
        $users = User::all();

        $projects = Project::all();

        $types = Type::all();

        return view("dashboard", compact("users", "projects", "types"));
    }
}
