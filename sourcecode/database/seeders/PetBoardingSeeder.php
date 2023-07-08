<?php

namespace Database\Seeders;

use App\Models\PetBoarding;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PetBoardingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            PetBoarding::create([
                'pet_name' => $faker->name,
                'owner_name' => $faker->name,
                'entry_date' => $faker->date,
                'exit_date' => $faker->date
            ]);
        }
    }
}
