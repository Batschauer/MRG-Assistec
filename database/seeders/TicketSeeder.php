<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketSeeder extends Seeder
{
    public function run()
    {
        DB::table('tickets')->insert(['title' => 'Nexus vazando', 'description' => 'vazando pelo arejador', 'status' => 'Fechado',
                                        'priority' => '1', 'opening_date' => '2021-04-13', 'closing_date' => '2021-04-14',
                                        'customer_id' => 1]);

        DB::table('tickets')->insert(['title' => 'Monocomando vazando', 'description' => 'vazando pelo volante', 'status' => 'Aberto',
                                        'priority' => '1', 'opening_date' => '2021-04-13',
                                        'customer_id' => 1]);
    }
}
