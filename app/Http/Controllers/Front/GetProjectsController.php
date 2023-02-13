<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Admin\Project;
use App\Models\Admin\Subservice;
use Illuminate\Http\Request;

class GetProjectsController extends Controller
{
    public function getprojects(Request $request){

    if(isset($request->service_id)){
            $projects['service_id'] = Project::where('service_id', $request->service_id)->with('partner')->orderByDesc('id')->get();
        }
        elseif($request->service_id && $request->subservice_id){
            $subservice = Subservice::where('service_id', $request->service_id)->get();
            $projects['subservice_id'] = Project::where('subservice_id', $subservice->id)->with('partner')->orderByDesc('id')->get();
        }
        else{
            $projects = Project::with('subservice', 'partner')->orderByDesc('id')->limit(4)->get();
        }
        return response()->json($projects);
    }
}
