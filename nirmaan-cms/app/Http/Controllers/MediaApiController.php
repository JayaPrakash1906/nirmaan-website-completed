<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MediaApiController extends Controller
{
    public function index(){
        $galleryMap=DB::select('SELECT * FROM gallery_media')[0];
        $eventsMap=DB::select('SELECT * FROM events_media')[0];
        $teamMap=DB::select('SELECT * FROM team_media')[0];
        $gallery=[];
        $events=[];
        $team=[];
        foreach($galleryMap as $key => $value){
            if($key != 'id' && $key != 'created_at'){
                array_push($gallery,$value);
            }
        }
        foreach($eventsMap as $key => $value){
            if($key != 'id' && $key != 'created_at'){
                array_push($events,$value);
            }
        }
        foreach($teamMap as $key => $value){
            if($key != 'id' && $key != 'created_at'){
                array_push($team,$value);
            }
        }
        return response()->json([$gallery,$events,$team]);
    }
}
