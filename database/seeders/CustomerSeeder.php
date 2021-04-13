<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    public function run()
    {
        DB::table('customers')->insert(['name' => 'Daniel', 'birthday' => '2003-07-15', 'phone' => '1213',
                                        'email' => 'daniel@mail.com', 'address' => 'Rua XF', 'zip_code' => '123456789',
                                        'city' => 'Gaspar', 'state' => 'SC']);

        DB::table('customers')->insert(['name' => 'Nathan', 'birthday' => '2000-09-18', 'phone' => '1213',
                                        'email' => 'nathan@mail.com', 'address' => 'Rua XF', 'zip_code' => '123456789',
                                        'city' => 'Gaspar', 'state' => 'SC']);
    }
}
