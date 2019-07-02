<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function newsList()
    {
        $newslist   =   News::where('status',1)->get();
        return view('site.media-news',compact('newslist'));
    }

    public function getNews($id)
    {
        $news    =   News::where('id',$id)->where('status',1)->first();
        $previous = News::where('id', '<', $id)->max('id');
        $next = News::where('id', '>', $id)->min('id');
        $newslist   =   News::whereNotIn('id',[$news->id,$previous??0,$next??0])->where('status',1)->get();

        return view('site.media-news-details',compact(['news','previous','next','newslist']));
    }
}
