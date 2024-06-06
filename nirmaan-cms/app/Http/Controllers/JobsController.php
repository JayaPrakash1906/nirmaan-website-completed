<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class JobsController extends Controller
{
    public function viewAddJobs(){
        if (Session::has('user_id')) {
            return view("CMS.Dashboard.add_startup_jobs");
        } else {
            return redirect('/login');
        } 
    }

    public function addJob(Request $request){
        DB::table('jobs')->insert([
            'startup_name' => $request->start_up_name,
            'start_up_category' => $request->start_up_category,
            'sector' =>$request->sector,
            'duration' =>$request->duration,
            'remuneration' =>$request->remuneration,
            'role' =>$request->role,
            'link' =>$request->link,
        ]);
        return redirect()->back();
    }
    public function filterJobs(Request $request,$filter_fields){
        $filter_fields = json_decode($filter_fields, true);
        $query_start="SELECT * FROM jobs WHERE jobs.id != 0";
        $role = '';
        $remuneration = '';
        $sector = '';
        $role_array = $request->role;
        $remuneration_array = $request->remuneration;
        $sector_array = $request->sector;
        
        if (isset($request->role)) {
            $filter_fields["role"] = $request->role;
            $role="'" . implode("','", $role_array) . "'";
            $query_start .= " AND jobs.role IN ($role)";
            
        }

        else {
            if (isset($filter_fields["role"])) {
                unset($filter_fields["role"]);
            }
        }

        if (isset($request->remuneration)) {
            $filter_fields["remuneration"] = $request->remuneration;
            if(in_array('paid',$filter_fields["remuneration"])){
                $query_start .= " AND CAST(jobs.remuneration AS INT) > 0 ";
            }
            if(in_array('unpaid',$filter_fields["remuneration"])){
                $query_start .= " AND CAST(jobs.remuneration AS INT) < 1 ";
            }
        }

        else {
            if (isset($filter_fields["remuneration"])) {
                unset($filter_fields["remuneration"]);
            }
        }

        if (isset($request->sector)) {
            $filter_fields["sector"]=$request->sector;
            $sector="'" . implode("','", $sector_array) . "'";
            $query_start .= " AND jobs.sector IN ($sector)";
        }
        else{
            if(isset($filter_fields["sector"])){
                unset($filter_fields["sector"]);
            }
        }
        $jobs=DB::select($query_start);
        return view('cms.dashboard.manage_jobs',compact('jobs','filter_fields'));
    }

    public function manageJobs(){
        if (Session::has('user_id')) {
            $jobs = DB::select("SELECT * FROM jobs");
            return view("CMS.Dashboard.manage_jobs",compact('jobs'));
        } else {
            return redirect('/login');
        }
    }
}
