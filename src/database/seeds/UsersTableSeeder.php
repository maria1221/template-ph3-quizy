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
        //
        
        // レコードを作成するための処理を用意
        //  
        $param = [
            'name' => 'posse',
            'email' => 'posse@gmail.com',
            'password' => Hash::make('password'),
        ];
        DB::table('users')->insert($param);
    }
}
