<?php

namespace Database\Seeders;

use App\Models\User;
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

        $user = User::factory()->create([
            'name' => 'John Doe'
        ]);

        Activity::factory(10)->create([
            'user_id' => $user->id
        ]);

    }
}
