<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Admin\Project;
use App\Models\Admin\Subservice;
use Illuminate\Http\Request;

class GetProjectsController extends Controller
{
    public function getprojects(Request $request){


        return response()->json($projects);
    }
}
