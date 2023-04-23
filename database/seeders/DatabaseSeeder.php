<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Item;
use App\Models\Month;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Item::factory(20)->create();
        Month::factory(20)->create();

        $this->call([
            UserSeeder::class,
            // ItemSeeder::class,
            // MonthSeeder::class,
            ItemMonthSeeder::class
        ]);
    }
}
