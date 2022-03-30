<?php

use App\Blog;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(Blog::class, 10)->create();
        factory(User::class, 10)->create();
    }
}
