<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Admin\InfoDirection;
use App\Models\Admin\Information;
use Illuminate\Http\Request;

class UsefulInformationController extends Controller
{
    public function index(){
        $directions = InfoDirection::with('informations')->get();
        return view('front.information', compact('directions'));
    }
}
