<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class StartupsMainController extends Controller
{
    public function startupsMainview(){
        if(Session::has('user_id')){
            $investors_link=DB::select("SELECT * FROM startups_links WHERE name='for investors'");
            if(count($investors_link)>0){
                $investors_link = $investors_link[0]->link_1;
            }
            else{
                $investors_link = null;
            }
            $startups_link=DB::select("SELECT * FROM startups_links WHERE name='for startups'");
            if(count($startups_link)>0){
                $startups_link = $startups_link[0]->link_1;
            }
            else {
                $startups_link = null;
            }
            $interns_link=DB::select("SELECT * FROM startups_links WHERE name='for interns'");
            if(count($interns_link)>0){
                $interns_link = [$interns_link[0]->link_1,$interns_link[0]->link_2];
            }
            else {
                $interns_link = null;
            }
            $links=[$investors_link,$startups_link,$interns_link];
            return view('cms.dashboard.startups_links',compact('links'));
        }
        else {
            return redirect('/login');
        }
    }

    public function addLinks(Request $request){
        if($request->name == "for investors"){
            $investors = DB::select("SELECT * FROM startups_links WHERE name = '$request->name'");
            if(count($investors)>0){
                DB::table('startups_links')
                ->where('name', 'for investors')
                ->update([
                    'link_1'=>$request->link_1,
                ]);
            }
            else{
                DB::table('startups_links')
                ->insert([
                    'name'=>$request->name,
                    'link_1'=>$request->link_1,
                ]);
            }
        }
        if($request->name == "for startups"){
            $startups = DB::select("SELECT * FROM startups_links WHERE name = '$request->name'");
            if(count($startups)>0){
                DB::table('startups_links')
                ->where('name', 'for startups')
                ->update([
                    'link_1'=>$request->link_1,
                ]);
            }
            else{
                DB::table('startups_links')
                ->insert([
                    'name'=>$request->name,
                    'link_1'=>$request->link_1,
                ]);
            }
        }
        if($request->name == "for interns"){
            $interns = DB::select("SELECT * FROM startups_links WHERE name ='$request->name'");
            if(count($interns)>0){
                DB::table('startups_links')
                ->where('name', 'for interns')
                ->update([
                    'link_1'=>$request->link_1,
                    'link_2'=>$request->link_2,
                ]);
            }
            else{
                DB::table('startups_links')
                ->insert([
                    'name'=>$request->name,
                    'link_1'=>$request->link_1,
                    'link_2'=>$request->link_2,
                ]);
            }
        }
        return redirect()->back();
    }
}
