<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Admin\Member;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function team(){
        $team = Member::all();
        return view('front.team', compact('team'));
    }

    public function member($id){
        $member = Member::with('articles')->where('id', $id)->first();
        return view('front.member', compact('member'));
    }
}
