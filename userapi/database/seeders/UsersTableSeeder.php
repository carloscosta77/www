<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Truncate existing records to start from scratch
        \App\Models\User::truncate();


#        $faker = \Faker\Factory::create();
 #       $faker->addProvider(new \Faker\Provider\en_US\Person($faker));

        // Create some users
#        for ($i = 0; $i < 10; $i++) {
#           User::create([
#              'name' => $faker->name,
#                'email' => $faker->email,
#                'birthday' => $faker->dateTimeThisCentury->format('Y-m-d'),
#                'gender' => $faker->randomElement($array = array ('m','f')),
#            ]);
#        }


    }

}
