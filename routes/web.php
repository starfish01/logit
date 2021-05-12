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

    $activities = Activity::whereHas('time_logs', function($query) {
        $query->where('start', '>', strtotime('today'));
    })->get();

    return view('activities', [
        'activities' => $activities,
        'allUsersTags' => Tag::get()
    ]);
});

Route::get('/edit/{activity}', function (Activity $activity) {
    return view('activity-edit', [
        'activity' => $activity,
        'allUsersTags' =>  Tag::get()
    ]);
});

Route::get('/edit-tags', function () {
    return view('tags', [
        'tags' => Tag::get()
    ]);
});

Route::get('/edit-tags/{tag}', function (Tag $tag) {
    return view('tag-edit', [
        'tag' => $tag
    ]);
});
