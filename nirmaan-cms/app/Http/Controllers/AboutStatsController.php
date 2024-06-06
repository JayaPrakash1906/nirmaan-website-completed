<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AboutStatsController extends Controller
{
    public function index(){
        if (Session::has('user_id')) {
            $data = DB::select("SELECT * FROM about_stats")[0];
            return view("CMS.Dashboard.stats",compact('data'));
        } else {
            return redirect('/login');
        }
    }

    public function updateAboutStats(Request $request) {
        foreach ($request->files as $key => $file) {
            $fileName = $file->getClientOriginalName();
            $path = $request->file($key)->storeAs($fileName);
            $filePath[$key] = $fileName;
        }

        DB::table("about_stats")
        ->where("id","=","1")
        ->update([
            "teams_trained" => $request->teams_trained,
            "graduated_teams" => $request->graduated_teams,
            "active_teams" => $request->active_teams,
            "funds_raised" => $request->funds_raised,
            "total_valuation" => $request->total_valuation,
            "photo_1" => $filePath["photo_1"],
            "photo_2" => $filePath["photo_2"],
            "photo_3" => $filePath["photo_3"],
            "photo_4" => $filePath["photo_4"],
            "photo_5" => $filePath["photo_5"],
            "photo_6" => $filePath["photo_6"],
        ]);
        
        return redirect()->back();
    }
}
