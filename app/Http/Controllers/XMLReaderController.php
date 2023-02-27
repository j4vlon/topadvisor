<?php

namespace App\Http\Controllers;

use App\Models\Admin\Article;
use App\Models\Admin\Member;
use App\Models\Admin\Project;
use App\Models\Admin\Service;
use App\Models\Admin\Subservice;
use Illuminate\Http\Request;

class XMLReaderController extends Controller
{
    public function index() {
        $services = Service::all();
        $subservices = Subservice::all();
        $projects = Project::all();
        $articles = Article::all();
        $members = Member::all();
        return response()->view('front.sitemap', compact('subservices', 'services', 'projects','articles', 'members'))
            ->header('Content-Type', 'text/xml');
    }
}
