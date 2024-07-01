<?php

namespace Database\Seeders;

use App\Models\Topics;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TopicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(Topics::count() <= 0){

            Topics::factory(5)->create();

        }
    }
}
