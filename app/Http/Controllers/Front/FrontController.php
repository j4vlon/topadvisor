<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Admin\Partner;
use App\Models\Admin\Project;
use App\Models\Admin\Service;
use App\Models\Admin\Subservice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

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
            if ($request->subservice_id){
                $projects = $query->where('subservice_id', $request->subservice_id)->with('partner')->get();
                return response()->json([
                    'projects' => $projects,
                ]);
            }
                if ($request->date){
                    $projects = Project::with('partner')->orderBy('created_at', 'DESC')->get();
                    return response()->json([
                        'projects' => $projects,
                    ]);
                }
                if ($request->industries){
                    $projects = Project::with('partner')->where('industries', $request->industries)->get();
                    return response()->json([
                        'projects' => $projects,
                    ]);
                }
        }

//        $projects = $query->get();
//        $subservices = $subservices_query->get();
        dd(App::getLocale());
        return view('front.homepage', compact('partners', 'services'));
    }

    public function contacts(){
        return view('front.contacts');
    }
}
