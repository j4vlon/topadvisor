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
        $subservices = Subservice::all();
        return view('front.homepage', compact('partners', 'services', 'subservices'));
    }
    public function contacts(){
        return view('front.contacts');
    }
}
