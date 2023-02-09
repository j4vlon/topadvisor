<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Admin\Subservice;
use Illuminate\Http\Request;

class SubserviceController extends Controller
{
    public function subserviceView($slug){
        $subservice = Subservice::with('steps', 'benefits')->where('slug', $slug)->first();

        return view('front.subservice', compact('subservice'));
    }
}
