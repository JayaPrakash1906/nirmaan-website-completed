<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContentaApiController extends Controller
{
    public function index(){
        $content = DB::select("SELECT * FROM home_page_6");
        return response()->json($content);
    }
}
