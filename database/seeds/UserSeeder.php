<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = \Faker\Factory::create('ne_NP');

        for( $i =0; $i < 1; $i++ ){

            $user = User::create([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'address' => $faker->address,
                'phone' => $faker->phoneNumber,
                'password' => 'password',
                'email' => $faker->safeEmail
            ]);

            echo $user->name . " seeded " . PHP_EOL;
        }
    }
}
