<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MediaController extends Controller
{
    public function news()
    {
        $news    =   News::where('status',1)->get();
        return view('backend.add_news',compact('news'));
    }

    public function newsSave(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title_en' => 'required',
            'description_en' => 'required',
            'date' => 'required',
        ]);
        if ($validator->fails())
        {
            return back()->withErrors($validator->errors())->withInput($request->all());
        }
        else
        {

            $news =   new News();
            $news->title_en  =   $request->title_en;
            $news->description_en  =   $request->description_en;

            $news->title_ar  =   $request->title_ar;
            $news->description_ar  =   $request->description_ar;

            $news->date  =   $request->date;
            $news->added_by  =   1;
            $news->status  =   1;
            $files  =   [];
            if($request->images)
            {
                foreach ($request->images as $img)
                {
                    if($img!='')
                    {
                        $files[] = $img->store('news','public_uploads');
                    }
                }
            }
            $news->images = json_encode($files);
            $news->save();

            $news    =   News::where('status',1)->get();
            return view('backend.add_news',compact('news'));
        }

    }
}
