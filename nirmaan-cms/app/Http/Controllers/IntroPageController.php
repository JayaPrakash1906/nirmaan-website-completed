<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class IntroPageController extends Controller
{
    //=============== page 1 functtions ==================//

    public function homePage1View(){
        if (Session::has('user_id')) {
        $events=DB::select("SELECT *  FROM home_page_1");
        return view('cms.dashboard.this_is_nirmaan',compact('events'));
        }
        else {
            return redirect('/login');
        }
        
    }
    public function addEvent(Request $request){
        DB::table('home_page_1')->insert([
            'event_name'=>$request->event_name,
            'date'=>$request->date,
        ]);
        return redirect()->back();
    }
    public function deleteEvent($eventId){
        DB::select("DELETE FROM home_page_1 WHERE id = $eventId ");
        return redirect()->back();
    }
    //=====================================================//

    //=============== page 5 functions ====================//
    public function homePage5View(){
        if (Session::has('user_id')) {
            $stories = DB::select("SELECT * FROM home_page_5");
            return view('cms.dashboard.they_are_talking',compact('stories'));
        } else {
            return redirect('/login');
        }
    }
    public function addStory(Request $request){
        DB::table('home_page_5')->insert([
            'name'=>$request->name,
            'designation'=>$request->designation,
            'story'=>$request->story,
        ]);
        return redirect()->back();
    }
    public function deleteStory($storyId){
        DB::select("DELETE FROM home_page_5 WHERE id =  $storyId ");
        return redirect()->back();
    }
    // ===================================================== //

    public function homePage6View(){
        if (Session::has('user_id')) {
            $contents = DB::select("SELECT * FROM home_page_6");
            return view('cms.dashboard.what_happens_in_nirmaan',compact('contents'));
        } else {
            return redirect('/login');
        }
    }
    public function addContent(Request $request){
        $file = $request->file('image');
        $fileName = $file->getClientOriginalName();
        $filePath = $file->storeAs($fileName);
        DB::table('home_page_6')->insert([
            'event_name'=>$request->event_name,
            'content'=>$request->content,
            'image'=>$filePath,
        ]);

        return redirect()->back();
    }
    public function deleteContent($storyId){
        DB::select("DELETE FROM home_page_6 WHERE id =  $storyId ");
        return redirect()->back();
    }

}
     