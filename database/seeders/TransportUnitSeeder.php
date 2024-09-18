<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class TransportUnitSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 1000) as $index) {
            DB::table('transport_units')->insert([
                'name' => $faker->word,
                'type' => $faker->randomElement(['truck', 'trailer']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
