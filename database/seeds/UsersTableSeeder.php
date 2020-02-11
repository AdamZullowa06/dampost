<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Administrator',
                'email' => 'admin@admin',
                'password' => Hash::make('admin123'),
                'level' => 'Admin'
            ],
            [
                'name' => 'Kasir',
                'email' => 'kasir@kasir',
                'password' => Hash::make('kasir123'),
                'level' => 'Kasir'
            ]
        ];

        DB::table('users')->insert($data);

    }
}
