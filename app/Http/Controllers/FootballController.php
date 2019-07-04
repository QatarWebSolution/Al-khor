<?php

namespace App\Http\Controllers;

use App\Fixtures;
use App\FootballPage;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class FootballController extends Controller
{
    public function team()
    {
        return view('backend.team');
    }

    public function teamSave(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title_en' => 'required',
            'description_en' => 'required',
            'date' => 'required',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator->errors())->withInput($request->all());
        } else {

            $news = new News();
            $news->title_en = $request->title_en;
            $news->description_en = $request->description_en;

            $news->title_ar = $request->title_ar;
            $news->description_ar = $request->description_ar;

            $news->date = $request->date;
            $news->added_by = 1;
            $news->status = 1;
            $files = [];
            if ($request->images) {
                foreach ($request->images as $img) {
                    if ($img != '') {
                        $files[] = $img->store('news', 'public_uploads');
                    }
                }
            }
            $news->images = json_encode($files);
            $news->save();

            return view('backend.team');
        }
    }

    public function football_rewards()
    {
        $rewards = FootballPage::where('id',1)->first();
        return view('backend.football_rewards',compact('rewards'));
    }

    public function football_rewardsSave(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'football_rewards_en' => 'required',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator->errors())->withInput($request->all());
        } else {

            $rewards = FootballPage::where('id',1)->first();

            if(!$rewards)
            {
                $rewards    =   new FootballPage();
            }

            $rewards->football_rewards_en = $request->football_rewards_en;
            $rewards->football_rewards_ar = $request->football_rewards_ar;
            $rewards->added_by = 1;
            $rewards->status = 1;
            $rewards->save();

            $rewards = FootballPage::where('id',1)->first();
            return view('backend.football_rewards',compact('rewards'));
        }
    }

    public function football_fanclub()
    {
        $rewards = FootballPage::where('id',1)->first();
        return view('backend.football-fanclub',compact('rewards'));
    }

    public function football_fanclubSave(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'football_fanclub_en' => 'required',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator->errors())->withInput($request->all());
        } else {

            $rewards = FootballPage::where('id',1)->first();

            if(!$rewards)
            {
                $rewards    =   new FootballPage();
            }

            $rewards->football_fanclub_en = $request->football_fanclub_en;
            $rewards->football_fanclub_ar = $request->football_fanclub_ar;
            if ($request->football_fanclub_cover_image)
            {
                $path = $request->football_fanclub_cover_image->store('football', 'public_uploads');
                $rewards->football_fanclub_cover_image = $path;
            }
            $rewards->added_by = Auth::user()->id;
            $rewards->status = 1;
            $rewards->save();

            $rewards = FootballPage::where('id',1)->first();
            return view('backend.football-fanclub',compact('rewards'));
        }
    }

    public function football_fixtures()
    {
        $fixtures = Fixtures::where('status', 1)->get();
        return view('backend.football-fixtures', compact('fixtures'));
    }

    public function football_fixturesSave(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'date' => 'required',
            'home_team_en' => 'required',
            'away_team_en' => 'required',
        ]);
        if ($validator->fails())
        {
            return back()->withErrors($validator->errors())->withInput($request->all());
        }
        else {

            $fixtures = new Fixtures();
            $date   =   Carbon::createFromFormat('d/m/Y H:i:s',$request->date);
            $fixtures->date = $date;
            $fixtures->home_team_en = $request->home_team_en;
            $fixtures->home_team_ar = $request->home_team_ar;
            if ($request->home_team_logo) {
                $path = $request->home_team_logo->store('fixtures', 'public_uploads');
                $fixtures->home_team_logo = $path;
            }
            $fixtures->away_team_en = $request->away_team_en;
            $fixtures->away_team_ar = $request->away_team_ar;
            if ($request->away_team_logo) {
                $path = $request->away_team_logo->store('fixtures', 'public_uploads');
                $fixtures->away_team_logo = $path;
            }
            $fixtures->stadium_en = $request->stadium_en;
            $fixtures->stadium_ar = $request->stadium_ar;
            $fixtures->score_en = $request->score_en;
            $fixtures->score_ar = $request->score_ar;

            $fixtures->added_by = Auth::user()->id;
            $fixtures->status = 1;
            $fixtures->save();

            $fixtures = Fixtures::where('status', 1)->get();
            return view('backend.football-fixtures', compact('fixtures'));
        }
    }

    public function football_fixturesdelete($id)
    {
        Fixtures::destroy($id);
        flash('Fixtures Deleted','success');
        return back();
    }
}
