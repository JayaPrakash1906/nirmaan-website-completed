<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JobsApiController extends Controller
{
    public function index(){
        $jobs = DB::select("SELECT * FROM jobs");
        return response()->json($jobs);
    }
    public function store(Request $request){
        $data = json_decode($request->getContent(),true);

        $role = '';
        $remuneration = '';
        $sectors = '';
        $query_start="SELECT * FROM jobs WHERE jobs.id != 0";
        if(count($data["role"]) > 0){
            $role="'" . implode("','", $data["role"]) . "'";
            $query_start .= " AND jobs.role IN ($role)";
        }
        if(count($data["remuneration"]) > 0){
            if(in_array('paid',$data["remuneration"])){
                $query_start .= " AND CAST(jobs.remuneration AS INT) > 0 ";
            }
            if(in_array('unpaid',$data["remuneration"])){
                $query_start .= " AND CAST(jobs.remuneration AS INT) < 1 ";
            }
        }
        if(count($data["sectors"]) > 0){
            $sectors="'" . implode("','", $data["sectors"]) . "'";
            $query_start .= " AND jobs.sector IN ($sectors)";
        }
        $jobs=DB::select($query_start);
        return response()->json($jobs);
    }

    public function searchJob(Request $request){
        $data = json_decode($request->getContent(),true);
        $search = $data["search"];
        $jobs = DB::select("SELECT * FROM jobs WHERE jobs.remuneration LIKE '%$search%' OR jobs.role LIKE '%$search%' OR jobs.sector LIKE '%$search%'");
        return response()->json($jobs);
    }
}
