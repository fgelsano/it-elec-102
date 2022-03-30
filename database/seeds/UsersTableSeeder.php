<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => $this->faker->sentence(),
            'email' => $this->faker->email,
            'password' => Hash::make('password')
        ]);
    }
}