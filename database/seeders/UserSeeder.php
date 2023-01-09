<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(array(
            'full_name' => 'Nguyen Ngoc Nghia',
            'phone_number' => '0964343115',
            'date_of_birth' => '27/07/2001',
            'email' => 'nghiann@zyyx.jp',
            'password' => Hash::make('admin'),
            'gender' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ));
    }
}
