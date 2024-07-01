<?php

namespace Database\Seeders;

use App\Models\Tickets;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TicketsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $NUMBER_FACTORIES = 20;

        if(Tickets::count() <= 0){

            Tickets::factory($NUMBER_FACTORIES)->create();

        }
    }
}
