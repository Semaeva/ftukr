<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function Index(){
        $newsSorted = News::all();
        $news = $newsSorted->sortBy('created_at');
        return view('news.all-news',['news'=>$news]);
    }

    public function show($id)
    {
        $currentNews = News::find($id)->get();
        return view('news.detail',['currentNews'=>$currentNews]);
        //
    }
}
