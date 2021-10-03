<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeaderboardController extends Controller
{
    public function indexChess()
    {
      $status=1;
      return view('pages.leaderboards.index',compact('status'));
    }
    public function indexBridge()
    {
      $status=2;
      return view('pages.leaderboards.index',compact('status'));
    }
    public function indexBike()
    {
      $status=3;
      return view('pages.leaderboards.index',compact('status'));
    }
    public function indexRun()
    {
      return view('pages.leaderboards.run.index');
    }
    public function indexPubg()
    {
      return view('pages.leaderboards.pubg.index');
    }
}
