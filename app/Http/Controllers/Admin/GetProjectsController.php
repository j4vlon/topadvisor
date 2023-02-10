<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Project;
use App\Models\Admin\Service;
use Illuminate\Http\Request;

class GetProjectsController extends Controller
{
    public function getprojects(Request $request){
        $service['service_id'] = Project::where('service_id', $request->service_id)-get();
        $subservice['subservice_id'] = Project::where('subservice_id', $request->subservice_id)->get();
        return response()->json($service, $subservice);
    }
}
