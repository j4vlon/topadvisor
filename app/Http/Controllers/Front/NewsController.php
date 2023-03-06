<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Admin\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        $news = News::orderBy('id', 'desc')->limit(16)->get();
        return view('front.news', compact('news'));
    }

    public function newsView($slug){
        $news = News::where('slug', $slug)->first();
        $slider_news = News::all();
        return view('front.single-news', compact('news', 'slider_news'));
    }
}
