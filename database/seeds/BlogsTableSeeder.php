<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
            'title' => $this->faker->sentence(),
            'body' => $this->faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            'thumbnail' => $this->faker->image(),
            'user_id' => $this->faker->randomDigit,
        ]);
    }
}
