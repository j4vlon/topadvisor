<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Admin\Partner;
use App\Models\Admin\Service;
use App\Models\Admin\Subservice;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function homepage(){
        $partners = Partner::orderBy('id', 'desc')->limit(8)->get();
        return view('front.homepage', compact('partners'));
    }
    public function contacts(){
        return view('front.contacts');
    }
}
