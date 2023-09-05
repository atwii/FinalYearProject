<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker=Faker::create();

        foreach(range(1,50) as $value){

            DB::table('users')->insert([

            'name' => $faker->name,
            'email' => $faker->unique()->safeEmail,
            'email_verified_at' => now(), // Assuming you want to set the current timestamp
            'password' => Hash::make($faker->password), // Hash a fake password
            'address' => $faker->address,
            'phone_nb' =>  $faker->numberBetween(10000000, 99999999),
            'username' => $faker->unique()->userName,
            'birthdate' => $faker->date,
            'role' => $faker->numberBetween(1, 5), // Assuming roles have IDs from 1 to 5
            'created_at' => now(), // Assuming you want to set the current timestamp
            'updated_at' => now(), // Assuming you want to set the current timestamp
  


            ]);
        }
    }
}
