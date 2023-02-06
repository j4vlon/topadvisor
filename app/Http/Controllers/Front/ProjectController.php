<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Admin\Project;
use App\Models\Admin\Subservice;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function projects(){
        $projects = Project::with('subservice', 'partner')->get();
        return view('front.projects', compact('projects'));
    }

    public function project($slug){
        $project = Project::with('subservice')->where('slug', $slug)->first();
        $projects = Project::with('subservice', 'partner')->where('subservice_id', $project->subservice->id)->get();
        return view('front.project', compact('project', 'projects'));
    }
}
