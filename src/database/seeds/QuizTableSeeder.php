<?php

use Illuminate\Database\Seeder;

class QuizTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // レコードを作成するための処理を用意
        //  
        $param = [
            'prefectures_name' => '東京',
        ];
        DB::table('quiz')->insert($param);

        $param = [
            'prefectures_name' => '広島',
        ];
        DB::table('quiz')->insert($param);
    }
}