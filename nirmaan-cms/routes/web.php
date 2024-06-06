<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IntroPageController;
use App\Http\Controllers\AboutStatsController;
use App\Http\Controllers\AddProjectController;
use App\Http\Controllers\StartupsMainController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('/login');
});


// Auth Routes
Route::get('/login', [AuthController::class, 'getLogin'])->name('login');
Route::post('/login', [AuthController::class, 'postLoginUser'])->name('login');
Route::get('/forget-password', [AuthController::class, 'getForgetPassword'])->name('forget-password');
Route::get('/logout', [AuthController::class, 'postLogout'])->name('logout');


// Dashboard Routes
Route::get('/dashboard', [DashboardController::class, 'getDashboard'])->name('dashboard');

//teams page
Route::get('/teams', [TeamsController::class, 'getTeams'])->name('teams');
Route::post('/teams', [TeamsController::class, 'addTeamMate'])->name('add.team.mate');
Route::post('/teams/{teamMateId}', [TeamsController::class, 'deleteTeamMate'])->name('delete.team.mate');

//home page 1
Route::get('/this_is_nirmaan', [IntroPageController::class, 'homePage1View'])->name('home.page1');
Route::post('/this_is_nirmaan', [IntroPageController::class, 'addEvent'])->name('add.event');
Route::post('/this_is_nirmaan/{eventId}', [IntroPageController::class, 'deleteEvent'])->name('delete.event');

//home page 5
Route::get('/they_are_talking', [IntroPageController::class, 'homePage5View'])->name('home.page5'); 
Route::post('/they_are_talking', [IntroPageController::class, 'addStory'])->name('add.story'); 
Route::post('/they_are_talking/{storyId}', [IntroPageController::class, 'deleteStory'])->name('delete.story');

//home page 6
Route::get('/what_happens', [IntroPageController::class, 'homePage6View'])->name('home.page6'); 
Route::post('/what_happens', [IntroPageController::class, 'addContent'])->name('add.content');
Route::post('/what_happens/{contentId}', [IntroPageController::class, 'deleteContent'])->name('delete.content');

//startups main page
Route::get('/startups_main', [StartupsMainController::class, 'startupsMainView'])->name('startups.main');
Route::post('/startups_main', [StartupsMainController::class, 'addLinks'])->name('add.links');

//startups media page
Route::get('/media', [GalleryController::class, 'galleryView'])->name('media');
Route::post('/media', [GalleryController::class, 'addImages'])->name('add.images');

//projects
Route::get('/add-project', [ProjectsController::class, 'viewAddProjects'])->name('add.project');
Route::post('/add-project', [ProjectsController::class, 'addProject'])->name('add.project.post');
Route::post('/update-project',[ProjectsController::class, 'updateProject'])->name('update.project');

Route::get('/manage-projects', [ProjectsController::class, 'viewManageProjects'])->name('manage.projects');
Route::post('/manage-projects', [ProjectsController::class, 'deleteProject'])->name('delete.project');
Route::post('/filter-projects/{filter_fields}', [ProjectsController::class, 'filterProjects'])->name('filter.projects');

Route::get('/edit-projects/{id}', [ProjectsController::class, 'viewEditProjects'])->name('edit.project');


//jobs
Route::get('/add-jobs', [JobsController::class,'viewAddJobs'])->name('add.jobs');
Route::post('/add-jobs', [JobsController::class,'addJob'])->name('post.add.jobs');

Route::get('/manage-jobs', [JobsController::class,'manageJobs'])->name('manage.jobs');
Route::post('/filter-jobs/{filter_fields}', [JobsController::class, 'filterJobs'])->name('filter.jobs');

//about stats
Route::get('/about-stats', [AboutStatsController::class,'index'])->name('about.stats');
Route::post('/about-stats', [AboutStatsController::class,'updateAboutStats']);















Route::get('/settings', [DashboardController::class, 'getSettings'])->name('settings');
Route::get('/unlink', function () {
    dd(Storage::exists("Pin.png"));
    // dd(Storage::exists("C:\MyProjects\nirmaan-cms\storage\/app/new_circle.png"));
});

