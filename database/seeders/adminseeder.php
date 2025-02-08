<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use illuminate\Support\Facades\DB;
use illuminate\Support\Facades\Hash;

class adminseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [

            [
                'email' => 'X8Tt0@example.com',
                'name' => 'admin',
                'password' => Hash::make('12345678')
            ],
        ];
        DB::table('users')->insert($data);

    }
}
$