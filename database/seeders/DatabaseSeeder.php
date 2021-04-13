<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CustomerSeeder::class);
        $this->call(TechnicianSeeder::class);
        $this->call(TicketSeeder::class);
        $this->call(EnvolvidosSeeder::class);
    }
}
