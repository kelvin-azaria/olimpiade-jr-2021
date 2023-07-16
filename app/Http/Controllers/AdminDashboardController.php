<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index(){
        $users = User::whereDate('created_at', Carbon::today())->get();
        return view('pages.admins_dashboard.index',[
          'page' => 'dashboard',
          'users' => $users
        ]);
    }

    public function announcementIndex(){
      return view('pages.admins_dashboard.event_management.announcements.index', ['page' => 'announcements']);
    }

    public function contactPersonsIndex(){
      return view('pages.admins_dashboard.event_management.announcements.index', ['page' => 'announcements']);
    }
}
