<?php

namespace Database\Factories;

use App\Models\Activity;
use App\Models\User;
use App\Models\TimeLog;
use Illuminate\Database\Eloquent\Factories\Factory;

class TimeLogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TimeLog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'activity_id' => Activity::factory(),
            'start' => time(),
            'end' => strtotime('+33 minutes')+33
        ];
    }
}
