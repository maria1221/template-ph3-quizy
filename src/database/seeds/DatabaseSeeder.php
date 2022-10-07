<?php

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
        // $this->call(UsersTableSeeder::class);
        $this->call(ChoicesTableSeeder::class);
        $this->call(QuizTableSeeder::class);
        // $this->call(PeopleTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        // 
    }
}
