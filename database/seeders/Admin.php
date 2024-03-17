<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'mau liat apa wkwkwkw',
            'email' => 'kontol@gmail.com',
            'password' => Hash::make('55555'),
            'is_admin' => true,
        ]);
    }
}
