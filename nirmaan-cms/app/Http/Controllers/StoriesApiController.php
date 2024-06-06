<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StoriesApiController extends Controller
{
    public function index(){
        $stories = DB::select("SELECT * FROM home_page_5");
        return response()->json($stories);
    }
}
