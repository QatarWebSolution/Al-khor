<?php

namespace App\Http\Controllers;

use App\FootballPage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('site.index');
    }

    public function football_rewards()
    {
        $rewards = FootballPage::where('id',1)->first();
        return view('site.football-rewards',compact('rewards'));
    }
}
