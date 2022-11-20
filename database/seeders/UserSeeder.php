<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
            'name' => 'arip budiman',
            'email' => 'arip@gmail.com',
            'password' => bcrypt('tuangokil22;'),
            'path_profile'=>'assets/cewe.jpg',
            'role'=>'admin'
        ]);
        DB::table('users')->insert([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => bcrypt('tuangokil22;'),
            'path_profile'=>'assets/cewe2.jpg',
            'role'=>'user'
        ]);
    }
}
