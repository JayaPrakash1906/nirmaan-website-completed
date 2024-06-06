<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutStatsApiController extends Controller
{
    public function index(){
        $stats = DB::select("SELECT * FROM about_stats")[0];
        return response()->json($stats);
    }
}
