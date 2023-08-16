<?php

namespace Database\Seeders;

use App\Models\Penjualan;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 0; $i < 15; $i++)
        {
            Penjualan::create([
                'name' => fake()->name(),
                'address' => fake()->address(),
                'created_at' => Carbon::today()->subDays(rand(0, 15)),
            ]);
        }
    }
}
