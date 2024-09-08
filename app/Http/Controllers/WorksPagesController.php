<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\File;

class WorksPagesController extends Controller
{
    public function show($project_name)
    {
        // Path to main file in project
        $viewPath = 'works.' . $project_name . '.index';

        // Check if view exist
        if (View::exists($viewPath)) {
            return view($viewPath);
        } else {
            abort(404, 'Project not found');
        }
    }
}
