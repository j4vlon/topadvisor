<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreSubserviceRequest;
use App\Models\Admin\Service;
use App\Models\Admin\Subservice;
use Illuminate\Http\Request;

class SubservicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $subservices = Subservice::all();
        return view('admin.subservices.index', compact('subservices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $services = Service::all();
        return view('admin.subservices.create', compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSubserviceRequest $request)
    {
        $subservice = new Subservice();
        $subservice->title = $request->title;
        $subservice->descr = $request->descr;
        if ($request->hasfile('file_url')){
            $path = $request->file_url->store('uploads', 'public');
            $subservice->file_url = '/storage/'.$path;
        }
        $subservice->service_id = $request->service_id;
        $subservice->is_active = $request->is_active;
        $subservice->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Subservice $subservice)
    {
        $services = Service::all();
        return view('admin.subservices.update', compact('subservice', 'services'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subservice $subservice)
    {
        $subservice->title = $request->title;
        $subservice->descr = $request->descr;
        if ($request->hasfile('file_url')){
            $path = $request->file_url->store('uploads', 'public');
            $subservice->file_url = '/storage/'.$path;
        }
        $subservice->service_id = $request->service_id;
        $subservice->is_active = $request->is_active;
        $subservice->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
