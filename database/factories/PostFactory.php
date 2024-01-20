<?php

namespace Database\Factories;

use App\Models\Status;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $status = Status::inRandomOrder()->first();
        $user = User::inRandomOrder()->first();
        return [
            'name' => $this->faker->sentence(),
            'content' => $this->faker->paragraph(),
            'status_id' => $status->id,
            'user_id' => $user->id,
        ];
    }
}
