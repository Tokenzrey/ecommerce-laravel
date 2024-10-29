<?php

namespace Database\Seeders\DummyData;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            CarProductCategorySeeder::class,
            CarProductSeeder::class,
            ProductCollectionSeeder::class,
        ]);
    }
}
