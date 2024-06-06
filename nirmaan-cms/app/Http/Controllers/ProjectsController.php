<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ProjectsController extends Controller
{
    public function viewAddProjects(){
        if (Session::has('user_id')) {
            return view("cms.dashboard.add_project");
        } else {
            return redirect('/login');
        }
    }

    public function addProject(Request $request){
        $data=$request->all();
        $details=array_keys($data);
        $members_name_list = '';
        $members_linkedin_list = '';
        $members_email_list = '';
        $media = '';
        foreach($details as $key){
            if(explode("_",$key)[0]=='member' && explode("_",$key)[1]=='name'){
                $members_name_list = $members_name_list == '' ? $members_name_list.$data[$key] : $members_name_list.','.$data[$key];
            }
            if(explode("_",$key)[0]=='member' && explode("_",$key)[1]=='linkedin'){
                $members_linkedin_list=$members_linkedin_list == '' ? $members_linkedin_list.$data[$key] : $members_linkedin_list.','.$data[$key];
            }
            if(explode("_",$key)[0]=='member' && explode("_",$key)[1]=='email'){
                $members_email_list=$members_email_list == '' ? $members_email_list.$data[$key] : $members_email_list.','.$data[$key];
            }
        }
        $files = $request->files;
        foreach($files as $key => $file){
            $fileName = $file->getClientOriginalName();
            $path = $request->file($key)->storeAs($fileName);
            $filePath[$key] = $fileName;
        }
        DB::table('projects')
        ->insert([
            'project_name' => $request->project_name,
            'start_up_name' => $request->start_up_name,
            'cohort_month'=> $request->cohort_month,
            'sector' => $request->sector,
            'incubation_year' => $request->incubation_year,
            'description' => $request->description,
            'members_name' => $members_name_list,
            'members_linkedin' => $members_linkedin_list,
            'members_email' => $members_email_list,
            'profile_photo' => $filePath["profile_photo"],
            'description_photo' => $filePath["description_photo"],
            'photo_1' => $filePath["photo_1"],
            'photo_2' => $filePath["photo_2"],
            'photo_3' => $filePath["photo_3"],
            'photo_4' => $filePath["photo_4"],
            'photo_5' => $filePath["photo_5"],
            'photo_6' => $filePath["photo_6"],
        ]);
        return redirect()->back();
    }

    public function viewManageProjects(){
        if(Session::has('user_id')){
            $projects = DB::select("SELECT * FROM projects");
            return view('cms.dashboard.manage_projects',compact('projects'));
        }
        else {
            return redirect('/login');
        }
    }
    public function filterProjects(Request $request,$filter_fields){
        $filter_fields = json_decode($filter_fields, true);
        $query_start="SELECT * FROM projects WHERE projects.id != 0";
        $incubation_year = '';
        $cohort_month = '';
        $sector = '';
        $incubation_year_array = $request->incubation_year;
        $cohort_month_array = $request->cohort_month;
        $sector_array = $request->sector;
        
        
        
        if (isset($request->incubation_year)) {
            $filter_fields["incubation_year"] = $request->incubation_year;
            $incubation_year="'" . implode("','", $incubation_year_array) . "'";
            $query_start .= " AND projects.incubation_year IN ($incubation_year)";
            
        }

        else {
            if (isset($filter_fields["incubation_year"])) {
                unset($filter_fields["incubation_year"]);
            }
        }
        if (isset($request->cohort_month)) {
            $filter_fields["cohort_month"] = $request->cohort_month;
            $cohort_month="'" . implode("','", $cohort_month_array) . "'";
            $query_start .= " AND projects.cohort_month IN ($cohort_month)";
            
        }

        else {
            if (isset($filter_fields["cohort_month"])) {
                unset($filter_fields["cohort_month"]);
            }
        }
        if (isset($request->sector)) {
            $filter_fields["sector"]=$request->sector;
            $sector="'" . implode("','", $sector_array) . "'";
            $query_start .= " AND projects.sector IN ($sector)";
        }
        else{
            if(isset($filter_fields["sector"])){
                unset($filter_fields["sector"]);
            }
        }
        $projects=DB::select($query_start);
        return view('cms.dashboard.manage_projects',compact('projects','filter_fields'));
    }

    public function deleteProject(Request $request){
        $project = DB::select("SELECT * FROM projects WHERE id ='$request->id'")[0];
        if (Storage::exists($project->profile_photo)) {
            unlink(storage_path('app/'.$project->profile_photo));
        }
        if (Storage::exists($project->description_photo)) {
            unlink(storage_path('app/'.$project->description_photo));
        }
        if (Storage::exists($project->photo_1)) {
            unlink(storage_path('app/'.$project->photo_1));
        }
        if (Storage::exists($project->photo_2)) {
            unlink(storage_path('app/'.$project->photo_2));
        }
        if (Storage::exists($project->photo_3)) {
            unlink(storage_path('app/'.$project->photo_3));
        }
        if (Storage::exists($project->photo_4)) {
            unlink(storage_path('app/'.$project->photo_4));
        }
        if (Storage::exists($project->photo_5)) {
            unlink(storage_path('app/'.$project->photo_5));
        }
        if (Storage::exists($project->photo_6)) {
            unlink(storage_path('app/'.$project->photo_6));
        }
        DB::select("DELETE FROM projects WHERE id='$request->id'");
        return redirect()->back();
    }

    public function viewEditProjects($id){
        $project = DB::select("SELECT * FROM projects WHERE id = $id")[0];
        if (Session::has('user_id')) {
        return view("CMS.Dashboard.edit_project",compact('project'));
        } else {
            return redirect('/login');
        }
    }

    public function updateProject(Request $request){
        $data=$request->all();
        $details=array_keys($data);
        $members_name_list = '';
        $members_linkedin_list = '';
        $members_email_list = '';
        $media = '';
        $project = DB::select("SELECT * FROM projects WHERE id ='$request->project_id'")[0];
        if ($request->hasFile('profile_photo') && $project->profile_photo && Storage::exists($project->profile_photo)) {
            unlink(storage_path('app/'.$project->profile_photo));
        }
        if ($request->hasFile('description_photo') && $project->description_photo && Storage::exists($project->description_photo)) {
            unlink(storage_path('app/'.$project->description_photo));
        }
        if ($request->hasFile('photo_1') && $project->photo_1 &&Storage::exists($project->photo_1)) {
            unlink(storage_path('app/'.$project->photo_1));
        }
        if ($request->hasFile('photo_2') && $project->photo_2 && Storage::exists($project->photo_2)) {
            unlink(storage_path('app/'.$project->photo_2));
        }
        if ($request->hasFile('photo_3') && $project->photo_3 && Storage::exists($project->photo_3)) {
            unlink(storage_path('app/'.$project->photo_3));
        }
        if ($request->hasFile('photo_4') && $project->photo_4 && Storage::exists($project->photo_4)) {
            unlink(storage_path('app/'.$project->photo_4));
        }
        if ($request->hasFile('photo_5') && $project->photo_5 && Storage::exists($project->photo_5)) {
            unlink(storage_path('app/'.$project->photo_5));
        }
        if ($request->hasFile('photo_6') && $project->photo_6 && Storage::exists($project->photo_6)) {
            unlink(storage_path('app/'.$project->photo_6));
        }
        foreach($details as $key){
            if(explode("_",$key)[0]=='member' && explode("_",$key)[1]=='name'){
                $members_name_list = $members_name_list == '' ? $members_name_list.$data[$key] : $members_name_list.','.$data[$key];
            }
            if(explode("_",$key)[0]=='member' && explode("_",$key)[1]=='linkedin'){
                $members_linkedin_list=$members_linkedin_list == '' ? $members_linkedin_list.$data[$key] : $members_linkedin_list.','.$data[$key];
            }
            if(explode("_",$key)[0]=='member' && explode("_",$key)[1]=='email'){
                $members_email_list=$members_email_list == '' ? $members_email_list.$data[$key] : $members_email_list.','.$data[$key];
            }
        }
        $files = $request->files;
        foreach($files as $key => $file){
            $fileName = $file->getClientOriginalName();
            $path = $request->file($key)->storeAs($fileName);
            $filePath[$key] = $fileName;
        }
        DB::table('projects')
        ->where('id','=',$request->project_id)
        ->update([
            'project_name' => $request->project_name,
            'start_up_name' => $request->start_up_name,
            'cohort_month'=> $request->cohort_month,
            'sector' => $request->sector,
            'incubation_year' => $request->incubation_year,
            'description' => $request->description,
            'members_name' => $members_name_list,
            'members_linkedin' => $members_linkedin_list,
            'members_email' => $members_email_list,
            'profile_photo' => $request->hasFile('profile_photo') ? $filePath["profile_photo"] : DB::raw('profile_photo'),
            'description_photo' => $request->hasFile('description_photo') ? $filePath["description_photo"] : DB::raw('description_photo'),
            'photo_1' => $request->hasFile('photo_1') ? $filePath["photo_1"] : DB::raw('photo_1'),
            'photo_2' => $request->hasFile('photo_2') ? $filePath["photo_2"] : DB::raw('photo_2'),
            'photo_3' => $request->hasFile('photo_3') ? $filePath["photo_3"] : DB::raw('photo_3'),
            'photo_4' => $request->hasFile('photo_4') ? $filePath["photo_4"] : DB::raw('photo_4'),
            'photo_5' => $request->hasFile('photo_5') ? $filePath["photo_5"] : DB::raw('photo_5'),
            'photo_6' => $request->hasFile('photo_6') ? $filePath["photo_6"] : DB::raw('photo_6'),
        ]);
        return redirect()->back();
    }
}
