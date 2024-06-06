<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    function getDashboard()
    {
        if (Session::has('user_id')) {
            $user = DB::select("SELECT * FROM users WHERE id = " . Session::get('user_id'));
            return view('CMS.Dashboard.dashboard', ['user' => $user]);
        } else {
            return redirect('/login');
        }
    }

    function getSettings()
    {
        return view('CMS.Dashboard.settings');
    }
}
