<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'first_name' => "Jordy",
            'last_name' => "Neefs",
            'email' => "jordy.neefs@student.ucll.be",
        ]);

        DB::table('users')->insert([
            'first_name' => "John",
            'last_name' => "Doe",
            'email' => "john.doe@gmail.com",
        ]);

        DB::table('users')->insert([
            'first_name' => "Bert",
            'last_name' => "Bibber",
            'email' => "bibberbert@gmail.com",
        ]);
    }
}
