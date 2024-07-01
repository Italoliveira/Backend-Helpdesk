<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Topics>
 */
class TopicsFactory extends Factory
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
            'name' => $fake->word(),
            'description' => 'Topico criado para testes',
            'responsible_id' => User::factory()->create()
        ];
    }
}
