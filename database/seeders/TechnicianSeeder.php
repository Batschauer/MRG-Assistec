<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TechnicianSeeder extends Seeder
{
    public function run()
    {
        DB::table('technicians')->insert(['name' => 'Nathan', 'phone' => '1213', 'email' => 'nathan@mail.com']);
        DB::table('technicians')->insert(['name' => 'Mauricio', 'phone' => '1213', 'email' => 'mauricio@mail.com']);
    }
}
