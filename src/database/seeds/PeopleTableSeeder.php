<?php

use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
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
            'user_id' => 'posse',
            'password' => Hash::make('password'),
        ];
        DB::table('people')->insert($param);
    }
}
