<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpdateMembersRequest;
use App\Models\Admin\Article;
use App\Models\Admin\Member;
use GuzzleHttp\Exception\ServerException;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $members = Member::with('articles', 'projects')->get();
        return view('admin.members.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('admin.members.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $members = new Member();
        $members->name = $request->name;
        $members->descr = $request->descr;
        $members->work_post = $request->work_post;
        if ($request->hasFile('file_url')){
            $path = $request->file_url->store('uploads', 'public');
            $members->file_url = '/storage/'.$path;
        }
        $members->save();
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
    public function edit(Member $member)
    {
        return view('admin.members.update', compact('member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateMembersRequest $request, Member $member)
    {
        $member->name = $request->name;
        $member->descr = $request->descr;
        $member->work_post = $request->work_post;
        if ($request->hasFile('file_url')){
            $path = $request->file_url->store('uploads', 'public');
            $member->file_url = '/storage/'.$path;
        }
        $member->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Member $member)
    {
        $member->delete();
        return redirect()->back();
    }
}
