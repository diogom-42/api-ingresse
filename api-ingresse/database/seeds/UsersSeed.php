<?php

use Illuminate\Database\Seeder;

class UsersSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'phone' => $faker->phoneNumber,
        ]);
    }
}
