<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventsApiController extends Controller
{
    public function index(){
        $events=DB::select("SELECT * FROM home_page_1");
        return response()->json($events);
    }
}
