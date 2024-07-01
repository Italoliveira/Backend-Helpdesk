<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Access;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(
            [
                UserSeeder::class,
                TopicsSeeder::class,
                TicketsSeeder::class,
                CommentsSeeder::class,
                PermissionsSeeder::class,
                AccessSeeder::class
            ]
        );
    }
}
