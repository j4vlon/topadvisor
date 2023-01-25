<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Admin\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function partners(){
        $partners = Partner::all();
        return view('front.partners', compact('partners'));
    }
}
