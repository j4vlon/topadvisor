<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Service;
use App\Models\Admin\Subservice;
use http\Client\Response;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class GetSubserviceController extends Controller
{
    public function getsubservice(Request $request){
        $data['subservice_id'] = Subservice::where("service_id",$request->service_id)->get();
        return response()->json($data);
    }
}
