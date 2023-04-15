<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MonthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('months')->insert([
            [
                'year' => 2023,
                'month' => 04,
            ],
            [
                'year' => 2023,
                'month' => 03,
            ],
            [
                'year' => 2023,
                'month' => 02,
            ],
            [
                'year' => 2023,
                'month' => 01,
            ],
        ]);
    }
}
