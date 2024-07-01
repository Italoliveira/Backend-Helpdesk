<?php

namespace Database\Factories;

use App\Models\Tickets;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comments>
 */
class CommentsFactory extends Factory
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
            'ticket_id' => Tickets::inRandomOrder()->first(),
            'comment'  => $fake->text(80),
            'attachment' => $fake->imageUrl()
        ];
    }
}
