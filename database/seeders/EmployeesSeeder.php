<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employees; 
use Faker\Factory as Faker;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create(); 

        for ($i = 0; $i < 10; $i++) {
            Employees::create([
                'user_id' => $faker->numberBetween(1, 10),
                'depart_id' => $faker->numberBetween(1, 5), 
                'address' => $faker->address,
                'place_of_birth' => $faker->city,
                'dob' => $faker->date('Y-m-d'), // Date of birth
                'religion' => $faker->randomElement(['Islam', 'Christianity', 'Hinduism', 'Buddhism', 'Others']),
                'sex' => $faker->randomElement(['Male', 'Female']),
                'phone' => $faker->phoneNumber,
                'salary' => $faker->numberBetween(3000000, 10000000), 
            ]);
        }
    }
}
