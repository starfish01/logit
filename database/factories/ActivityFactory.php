<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Activity;
use Illuminate\Database\Eloquent\Factories\Factory;

use function Ramsey\Uuid\v1;

class ActivityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Activity::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'activity' => $this->faker->sentence,
            'active_time_log' => null
        ];
    }

}
