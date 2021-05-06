<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Activity;
use App\Models\TimeLog;
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

        $user = User::factory()->create([
            'name' => 'John Doe'
        ]);

        $activities = Activity::factory(10)->create([
            'user_id' => $user->id
        ]);

        foreach ($activities as $loop => $activity) {
            $timeLogs = TimeLog::factory(10)->create([
                'activity_id' => $activity->id,
                'user_id' => $user->id,
            ]);

            if ($loop === 3 || $loop === 7) {
                Activity::where('id', $activity->id)->update(['active_time_log' => $timeLogs[0]->id]);
            }

        }



    }
}
