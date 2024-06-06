<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StartupsMainApiController extends Controller
{
    public function index(){
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
        return response()->json([$investors_link,$startups_link,$interns_link]);
    }
}
