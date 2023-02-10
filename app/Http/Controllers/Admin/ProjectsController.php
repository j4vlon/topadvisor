<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreProjectRequest;
use App\Http\Requests\Admin\UpdatePartnerRequest;
use App\Http\Requests\Admin\UpdateProjectRequest;
use App\Models\Admin\Member;
use App\Models\Admin\Partner;
use App\Models\Admin\Project;
use App\Models\Admin\Service;
use App\Models\Admin\Subservice;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $projects = Project::with('subservice', 'partner', 'member')->get();
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $partners = Partner::all();
        $members = Member::all();
        $services = Service::all();
        return view('admin.projects.create', compact('partners', 'members', 'services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreProjectRequest $request)
    {
        $project = new Project();
        $project->service_id = $request->service_id;
        $project->partner_id = $request->partner_id;
        $project->subservice_id = $request->subservice_id;
        $project->member_id = $request->member_id;
        $project->title = $request->title;
        $project->descr = $request->descr;
        $project->form_title = $request->form_title;
        $project->short_descr = $request->short_descr;
        if ($request->hasFile('project_img')){
            $path = $request->project_img->store('uploads', 'public');
            $project->project_img = '/storage/'.$path;
        }
        $project->save();
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
    public function edit(Project $project)
    {
        $partners = Partner::all();
        $members = Member::all();
        $subservices = Subservice::all();
        $services = Service::all();
        return view('admin.projects.update', compact('partners', 'subservices', 'project', 'members', 'services'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        $project->service_id = $request->service_id;
        $project->partner_id = $request->partner_id;
        $project->subservice_id = $request->subservice_id;
        $project->member_id = $request->member_id;
        $project->title = $request->title;
        $project->descr = $request->descr;
        $project->form_title = $request->form_title;
        $project->short_descr = $request->short_descr;
        if ($request->hasFile('project_img')){
            $path = $request->project_img->store('uploads', 'public');
            $project->project_img = '/storage/'.$path;
        }
        $project->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->back();
    }
}
