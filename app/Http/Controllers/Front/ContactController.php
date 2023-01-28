<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\Front\StoreContact;
use App\Models\Admin\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function feedback(StoreContact $request){
        $feedback = new Contact();
        $feedback->name = $request->name;
        $feedback->company_name = $request->company_name;
        $feedback->phone = $request->phone;
        $feedback->is_active = 1;
        $feedback->save();
        return redirect()->back();
    }
}
