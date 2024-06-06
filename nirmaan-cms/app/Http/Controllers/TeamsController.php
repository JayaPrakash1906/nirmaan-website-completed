<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class TeamsController extends Controller
{
    public function getTeams()
    {
        if(Session::has('user_id')){
            $teamMates= DB::select("SELECT * FROM team_mates");
            return view("cms.dashboard.teams",compact('teamMates'));
        }
        else {
            return redirect('/login');
        }
    }
    public function addTeamMate(Request $request){
        $file = $request->file('profile_image');
        $fileName = $file->getClientOriginalName();
        $filePath = $file->storeAs($fileName);

        DB::table('team_mates')->insert([
            'name'=>$request->team_mate_name,
            'tagline'=>$request->tagline,
            'designation'=>$request->designation,
            'description'=>$request->description,
            'team'=>$request->team,
            'profile_image'=>$filePath,
        ]);
        return redirect()->back();
    }

    public function deleteTeamMate($teamMateId){
        $teamMates = DB::select("SELECT * FROM team_mates WHERE id=$teamMateId");
        if(Storage::exists($teamMates[0]->profile_image)){
        unlink(storage_path('app/'.$teamMates[0]->profile_image));
        }
        DB::select("DELETE FROM team_mates WHERE id=$teamMateId");  
        return redirect()->back();
    }
}
