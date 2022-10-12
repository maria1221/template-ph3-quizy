<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ChoicesTableSeeder::class);
        $this->call(BigQuestionsTableSeeder::class);
        $this->call(QuestionsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
