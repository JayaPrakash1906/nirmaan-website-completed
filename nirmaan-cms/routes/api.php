<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\JobsApiController;
use App\Http\Controllers\MediaApiController;
use App\Http\Controllers\TeamsApiController;
use App\Http\Controllers\EventsApiController;
use App\Http\Controllers\AboutStatsController;
use App\Http\Controllers\StoriesApiController;
use App\Http\Controllers\ContentaApiController;
use App\Http\Controllers\ProjectsApiController;
use App\Http\Controllers\AboutStatsApiController;
use App\Http\Controllers\StartupsMainApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('teams', TeamsApiController::class);
Route::resource('events', EventsApiController::class);
Route::resource('stories', StoriesApiController::class);
Route::resource('contents', ContentaApiController::class);
Route::resource('startups_main', StartupsMainApiController::class);
Route::resource('media', MediaApiController::class);
Route::resource('about_stats',AboutStatsApiController::class);

Route::get('projects', [ProjectsApiController::class,'index']);
Route::post('get-projects', [ProjectsApiController::class,'store']);
Route::post('search-projects', [ProjectsApiController::class,'searchProjects']);
Route::get('jobs', [JobsApiController::class,'index']);
Route::post('get-jobs', [JobsApiController::class,'store']);
Route::post('search-jobs', [JobsApiController::class,'searchJob']);










Route::get('images/{path}', [ImageController::class,'show']);
