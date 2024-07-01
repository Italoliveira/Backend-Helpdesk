<?php

namespace Database\Factories;

use App\Models\Topics;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tickets>
 */
class TicketsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $fake = fake('pt_BR');

        return [
            'user_id' => User::inRandomOrder()->first(),
            'description' => $fake->text(),
            'topic_id' => Topics::inRandomOrder()->first(),
            'priority'=> 'medium',
            'status' => 'open',
            'responsible_id' => User::inRandomOrder()->first()
        ];
    }
}
