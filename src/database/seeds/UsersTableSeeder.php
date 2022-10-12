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
        $param = [
            'name' => 'posse',
            'email' => 'posse@gmail.com',
            'password' => Hash::make('password'),
        ];
        DB::table('users')->insert($param);
    }
}
