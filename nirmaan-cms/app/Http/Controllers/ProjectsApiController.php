<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectsApiController extends Controller
{
    public function index(){
        $projects = DB::select("SELECT * FROM projects");
        return response()->json($projects);
    }
    public function store(Request $request){
        $data = json_decode($request->getContent(),true);

        $incubation_year = '';
        $cohort_months = '';
        $sectors = '';
        $query_start="SELECT * FROM projects WHERE projects.id != 0";
        if(count($data["incubation_years"]) > 0){
            $incubation_year="'" . implode("','", $data["incubation_years"]) . "'";
            $query_start .= " AND projects.incubation_year IN ($incubation_year)";
        }
        if(count($data["cohort_months"]) > 0){
            $cohort_months="'" . implode("','", $data["cohort_months"]) . "'";
            $query_start .= " AND projects.cohort_month IN ($cohort_months)";
        }
        if(count($data["sectors"]) > 0){
            $sectors="'" . implode("','", $data["sectors"]) . "'";
            $query_start .= " AND projects.sector IN ($sectors)";
        }
        $projects=DB::select($query_start);
        return response()->json($projects);
    }
    public function searchProjects(Request $request){
        $data = json_decode($request->getContent(),true);
        $search = $data["search"];
        $year = intval($search) - 1;
        $projects = DB::select("SELECT * FROM projects WHERE projects.cohort_month LIKE '%$search%' OR projects.incubation_year LIKE '%$search%' OR projects.incubation_year LIKE '%$year%' OR projects.start_up_name LIKE '%$search%' OR projects.start_up_name LIKE '%$search%'");
        return response()->json($projects);
    }
}
