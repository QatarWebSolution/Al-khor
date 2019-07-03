<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FootballController extends Controller
{
    public function team()
    {
        return view('backend.team');
    }

    public function teamSave(Request $request

    )
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

        return view('backend.team');
    }
}
