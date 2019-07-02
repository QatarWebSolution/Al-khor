<?php

namespace App\Http\Controllers;

use App\HomeAbout;
use App\HomeSlider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomePage extends Controller
{
    public function slider()
    {
        $sliders    =   HomeSlider::where('status',1)->get();
        return view('backend.home.slider',compact('sliders'));
    }

    public function sliderSave(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'slider' => 'required|image',
        ]);
        if ($validator->fails())
        {
            return back()->withErrors($validator->errors())->withInput($request->all());
        }
        else
        {

            $slider =   new HomeSlider();
            $slider->title  =   $request->title;
            $slider->description  =   $request->description;
            $slider->link  =   $request->link;
            $slider->added_by  =   1;
            $slider->status  =   1;
            if ($request->hasFile('slider'))
            {
                $path = $request->slider->store('slider', 'public_uploads');
                $slider->slider_image = $path;
            }
            $slider->save();

            $sliders    =   HomeSlider::where('status',1)->get();
            return view('backend.home.slider',compact('sliders'));
        }
    }

    public function about()
    {
        $abouts    =   HomeAbout::where('status',1)->get();
        return view('backend.home.about',compact('abouts'));
    }

    public function aboutSave(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'about1_en' => 'required',
            'about1_ar' => 'required',
            'about2_en' => 'required',
            'about2_ar' => 'required',
        ]);
        if ($validator->fails())
        {
            return back()->withErrors($validator->errors())->withInput($request->all());
        }
        else
        {
            $about    =   HomeAbout::where('status',1)->where('id',1)->first();
            if(!$about)
            {
                $about =   new HomeAbout();
            }
            $about->about1_en  =   $request->about1_en;
            $about->about1_ar  =   $request->about1_ar;
            $about->about2_en  =   $request->about2_en;
            $about->about2_ar  =   $request->about2_ar;
            $about->added_by  =   1;
            $about->status  =   1;
            $about->save();

            $abouts    =   HomeAbout::where('status',1)->get();
            return view('backend.home.about',compact('abouts'));
        }
    }
}
