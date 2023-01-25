<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Admin\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function serviceView($slug){
        $service = Service::with('subservices')->where('slug', $slug)->first();
        return view('front.services', compact('service'));
    }
}
