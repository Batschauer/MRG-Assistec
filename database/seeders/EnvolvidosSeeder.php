<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EnvolvidosSeeder extends Seeder
{
    public function run()
    {
        DB::table('envolvidos')->insert(['technician_id' => 1, 'ticket_id' => 1]);
        DB::table('envolvidos')->insert(['technician_id' => 2, 'ticket_id' => 1]);
    }
}
