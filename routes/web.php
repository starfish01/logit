<?php

use App\Models\Tag;
use App\Models\User;
use App\Models\Activity;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $logsStillActive = Activity::whereNotNull('active_time_log')->whereHas('time_logs', function ($query) {
        $query->where('start', '<', strtotime('today'));
    })->get();

    if (count($logsStillActive)) {

        return view('logs-still-active', [
            'activeActivties' => $logsStillActive
        ]);
    }


    $activities = Activity::whereHas('time_logs', function ($query) {
        $query->where('start', '>', strtotime('today'));
    })->get();

    return view('activities', [
        'activities' => $activities,
        'allUsersTags' => Tag::get()
    ]);
})->name('activities');

Route::get('/edit/{activity}', function (Activity $activity) {
    return view('activity-edit', [
        'activity' => $activity,
        'allUsersTags' => Tag::get()
    ]);
})->name('activities');

Route::get('/edit-tags', function () {
    return view('tags', [
        'tags' => Tag::get()
    ]);
})->name('tags');

Route::get('/edit-tags/{tag}', function (Tag $tag) {
    return view('tag-edit', [
        'tag' => $tag
    ]);
})->name('tags');

Route::get('/analytics', function () {
    return view('analytics', []);
})->name('analytics');

Route::get('/export', function () {
    return view('export', []);
})->name('export');
