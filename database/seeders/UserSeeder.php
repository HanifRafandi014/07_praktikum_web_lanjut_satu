<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        DB::table('users')->insert([
            'username'=> 'hanifnaufal',
            'name' => 'Hanif Naufal Rafandi',
            'email' => 'rafandinaufal03@gmail.com',
            'password'=> Hash::make('rafandinaufal13579')
        ]);

        DB::table('users')->insert([
            'username'=> 'admin',
            'name' => 'Administrator',
            'email' => 'admin416@gmail.com',
            'password'=> Hash::make('admin24680')
        ]);
    }
}
