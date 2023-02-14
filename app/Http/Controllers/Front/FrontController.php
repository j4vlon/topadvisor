<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Admin\Partner;
use App\Models\Admin\Project;
use App\Models\Admin\Service;
use App\Models\Admin\Subservice;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function homepage(Request $request){
        $partners = Partner::orderBy('id', 'desc')->limit(8)->get();
        $services = Service::all();
        $subservices_query = Subservice::query();
        $query = Project::query();

        if($request->ajax()){
            if ($request->service_id){
                $subservices = $subservices_query->where('service_id', $request->service_id)->get();
                $projects = $query->where('service_id', $request->service_id)->with('partner')->get();
                return response()->json([
                    'projects' => $projects,
                    'subservices' => $subservices,
                ]);
            }
            if ($request->ajax()){
                $projects = $query->where('subservice_id', $request->subservice_id)->with('partner')->get();
                return response()->json([
                    'projects' => $projects,
                ]);
            }
        }

        $projects = $query->get();
        $subservices = $subservices_query->get();
        return view('front.homepage', compact('partners', 'services', 'subservices', 'projects'));
    }

    public function contacts(){
        return view('front.contacts');
    }
}
