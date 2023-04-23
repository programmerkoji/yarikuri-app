<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('items')->insert([
            [
                'name' => '家賃更新',
                'price' => 4000,
            ],
            [
                'name' => 'ガソリン',
                'price' => 15000,
            ],
            [
                'name' => 'タイヤ関連',
                'price' => 3000,
            ],
        ]);
    }
}
