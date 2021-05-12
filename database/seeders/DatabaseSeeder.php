<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\User;
use App\Models\TimeLog;
use App\Models\Activity;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::truncate();
        Activity::truncate();
        TimeLog::truncate();
        Tag::truncate();

        $user = User::factory()->create([
            'name' => 'John Doe'
        ]);

        $tags = Tag::factory(10)->create([
            'user_id' => $user->id
        ]);

        $activities = Activity::factory(10)->create([
            'user_id' => $user->id
        ]);

        foreach ($activities as $loop => $activity) {
            $timeLogs = TimeLog::factory(10)->create([
                'activity_id' => $activity->id,
                'user_id' => $user->id,
            ]);

            $activity->tags()->attach(
                $tags->random(rand(1, 3))->pluck('id')->toArray()
            );

            if ($loop === 3 || $loop === 7) {
                Activity::where('id', $activity->id)->update(['active_time_log' => $timeLogs[0]->id]);
            }

        }



    }
}
