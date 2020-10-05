<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Jose Fco. Ochando',
            'email' => 'jfochando@gmail.com',
            'password' => Hash::make('12345678'), // password
            'dni' => '20155730W',
            'address' => '$this->faker->address',
            'phone' => '',
            'role' => 'admin'
        ]);
        User::factory()
            ->times(50)
            ->create();
    }
}
