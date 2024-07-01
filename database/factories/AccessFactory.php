<?php

namespace Database\Factories;

use App\Models\Permissions;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Access>
 */
class AccessFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first(),
            'permission_id' => Permissions::inRandomOrder()->first(),
            'description' => fake()->text(),
            'responsible_id' => User::inRandomOrder()->first()
        ];
    }
}
