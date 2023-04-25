<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('events')->insert([
            'name' => "Event 1",
            'start_date' => "2023-07-01",
            'end_date' => "2023-07-03",
        ]);

        DB::table('events')->insert([
            'name' => "Event 2",
            'start_date' => "2023-07-10",
            'end_date' => "2023-07-13",
        ]);

        DB::table('events')->insert([
            'name' => "Event 3",
            'start_date' => "2023-07-20",
            'end_date' => "2023-07-23",
        ]);
    }
}
