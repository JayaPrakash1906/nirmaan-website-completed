<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function galleryView(){
        if(Session::has('user_id')){
            return view('cms.dashboard.media');
        }
        else{
            return redirect('/login');
        }
    }
    public function addImages(Request $request){
        $file = $request->file('image');
        $fileName = $file->getClientOriginalName();
        $filePath = $file->storeAs($fileName);
        if($request->type == 'gallery'){
            switch ($request->image_no) {
                case "1":
                    $image=DB::select("SELECT * FROM gallery_media WHERE id='1'")[0]->image_1;
                    Storage::exists(storage_path('app/'.$image)) ? unlink(storage_path('app/'.$image)) : null;
                    DB::table("gallery_media")
                    ->where('id','1')
                    ->update([
                        'image_1' => $filePath,
                    ]);
                  break;
                case "2":
                    $image=DB::select("SELECT * FROM gallery_media WHERE id='1'")[0]->image_2;
                    Storage::exists(storage_path('app/'.$image)) ? unlink(storage_path('app/'.$image)) : null;
                    DB::table("gallery_media")
                    ->where('id','1')
                    ->update([
                        'image_2' => $filePath,
                    ]);
                  break;
                case "3":
                    $image=DB::select("SELECT * FROM gallery_media WHERE id='1'")[0]->image_3;
                    Storage::exists(storage_path('app/'.$image)) ? unlink(storage_path('app/'.$image)) : null;
                    DB::table("gallery_media")
                    ->where('id','1')
                    ->update([
                        'image_3' => $filePath,
                    ]);
                  break;
                case "4":
                    $image=DB::select("SELECT * FROM gallery_media WHERE id='1'")[0]->image_4;
                    Storage::exists(storage_path('app/'.$image)) ? unlink(storage_path('app/'.$image)) : null;
                    DB::table("gallery_media")
                    ->where('id','1')
                    ->update([
                        'image_4' => $filePath,
                    ]);
                    break;
                case "5":
                    $image=DB::select("SELECT * FROM gallery_media WHERE id='1'")[0]->image_5;
                    Storage::exists(storage_path('app/'.$image)) ? unlink(storage_path('app/'.$image)) : null;
                    DB::table("gallery_media")
                    ->where('id','1')
                    ->update([
                        'image_5' => $filePath,
                    ]);
                    break;
                case "6":
                    $image=DB::select("SELECT * FROM gallery_media WHERE id='1'")[0]->image_6;
                    Storage::exists(storage_path('app/'.$image)) ? unlink(storage_path('app/'.$image)) : null;
                    DB::table("gallery_media")
                    ->where('id','1')
                    ->update([
                        'image_6' => $filePath,
                    ]);
                    break;
                default:
                  return redirect()->back()->with('no_image','no image selected');
            }
        }
        if($request->type == 'events'){
            switch ($request->image_no) {
                case "1":
                    $image=DB::select("SELECT * FROM events_media WHERE id='1'")[0]->image_1;
                    Storage::exists(storage_path('app/'.$image)) ? unlink(storage_path('app/'.$image)) : null;
                    DB::table("events_media")
                    ->where('id','1')
                    ->update([
                        'image_1' => $filePath,
                    ]);
                  break;
                case "2":
                    $image=DB::select("SELECT * FROM events_media WHERE id='1'")[0]->image_2;
                    Storage::exists(storage_path('app/'.$image)) ? unlink(storage_path('app/'.$image)) : null;
                    DB::table("events_media")
                    ->where('id','1')
                    ->update([
                        'image_2' => $filePath,
                    ]);
                  break;
                case "3":
                    $image=DB::select("SELECT * FROM events_media WHERE id='1'")[0]->image_3;
                    Storage::exists(storage_path('app/'.$image)) ? unlink(storage_path('app/'.$image)) : null;
                    DB::table("events_media")
                    ->where('id','1')
                    ->update([
                        'image_3' => $filePath,
                    ]);
                  break;
                case "4":
                    $image=DB::select("SELECT * FROM events_media WHERE id='1'")[0]->image_4;
                    Storage::exists(storage_path('app/'.$image)) ? unlink(storage_path('app/'.$image)) : null;
                    DB::table("events_media")
                    ->where('id','1')
                    ->update([
                        'image_4' => $filePath,
                    ]);
                    break;
                case "5":
                    $image=DB::select("SELECT * FROM events_media WHERE id='1'")[0]->image_5;
                    Storage::exists(storage_path('app/'.$image)) ? unlink(storage_path('app/'.$image)) : null;
                    DB::table("events_media")
                    ->where('id','1')
                    ->update([
                        'image_5' => $filePath,
                    ]);
                    break;
                case "6":
                    $image=DB::select("SELECT * FROM events_media WHERE id='1'")[0]->image_6;
                    Storage::exists(storage_path('app/'.$image)) ? unlink(storage_path('app/'.$image)) : null;
                    DB::table("events_media")
                    ->where('id','1')
                    ->update([
                        'image_6' => $filePath,
                    ]);
                    break;
                default:
                  return redirect()->back()->with('no_image','no image selected');
            }
        }
        if($request->type == 'team'){
            switch ($request->image_no) {
                case "1":
                    $image=DB::select("SELECT * FROM team_media WHERE id='1'")[0]->image_1;
                    Storage::exists(storage_path('app/'.$image)) ? unlink(storage_path('app/'.$image)) : null;
                    DB::table("team_media")
                    ->where('id','1')
                    ->update([
                        'image_1' => $filePath,
                    ]);
                  break;
                case "2":
                    $image=DB::select("SELECT * FROM team_media WHERE id='1'")[0]->image_2;
                    Storage::exists(storage_path('app/'.$image)) ? unlink(storage_path('app/'.$image)) : null;
                    DB::table("team_media")
                    ->where('id','1')
                    ->update([
                        'image_2' => $filePath,
                    ]);
                  break;
                case "3":
                    $image=DB::select("SELECT * FROM team_media WHERE id='1'")[0]->image_3;
                    Storage::exists(storage_path('app/'.$image)) ? unlink(storage_path('app/'.$image)) : null;
                    DB::table("team_media")
                    ->where('id','1')
                    ->update([
                        'image_3' => $filePath,
                    ]);
                  break;
                case "4":
                    $image=DB::select("SELECT * FROM team_media WHERE id='1'")[0]->image_4;
                    Storage::exists(storage_path('app/'.$image)) ? unlink(storage_path('app/'.$image)) : null;
                    DB::table("team_media")
                    ->where('id','1')
                    ->update([
                        'image_4' => $filePath,
                    ]);
                    break;
                case "5":
                    $image=DB::select("SELECT * FROM team_media WHERE id='1'")[0]->image_5;
                    Storage::exists(storage_path('app/'.$image)) ? unlink(storage_path('app/'.$image)) : null;
                    DB::table("team_media")
                    ->where('id','1')
                    ->update([
                        'image_5' => $filePath,
                    ]);
                    break;
                case "6":
                    $image=DB::select("SELECT * FROM team_media WHERE id='1'")[0]->image_6;
                    Storage::exists(storage_path('app/'.$image)) ? unlink(storage_path('app/'.$image)) : null;
                    DB::table("team_media")
                    ->where('id','1')
                    ->update([
                        'image_6' => $filePath,
                    ]);
                    break;
                default:
                  return redirect()->back()->with('no_image','no image selected');
            }
        }
        return redirect()->back();
    }
}
