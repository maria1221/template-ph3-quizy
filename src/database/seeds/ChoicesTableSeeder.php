<?php

use Illuminate\Database\Seeder;
use App\Models\Choice;

class ChoicesTableSeeder extends Seeder
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
        $param = [
            'choice' => 'たかなわ',
            'prefectures_id' => '1',
            'answer' => '1',
            'question_id' => '1',
        ];
        DB::table('choices')->insert($param);
        $param = [
            'choice' => 'たかわ',
            'prefectures_id' => '1',
            'answer' => '0',
            'question_id' => '1',
        ];
        DB::table('choices')->insert($param);
        $param = [
            'choice' => 'こうわ',
            'prefectures_id' => '1',
            'answer' => '0',
            'question_id' => '1',
        ];
        DB::table('choices')->insert($param);
        $param = [
            'choice' => 'かめど',
            'prefectures_id' => '1',
            'answer' => '0',
            'question_id' => '2',
        ];
        DB::table('choices')->insert($param);
        $param = [
            'choice' => 'かめと',
            'prefectures_id' => '1',
            'answer' => '0',
            'question_id' => '2',
        ];
        DB::table('choices')->insert($param);
        $param = [
            'choice' => 'かめいど',
            'prefectures_id' => '1',
            'answer' => '1',
            'question_id' => '2',
        ];
        DB::table('choices')->insert($param);
        $param = [
            'choice' => 'むきひら',
            'prefectures_id' => '2',
            'answer' => '0',
            'question_id' => '3',
        ];
        DB::table('choices')->insert($param);
        $param = [
            'choice' => 'むこうひら',
            'prefectures_id' => '2',
            'answer' => '0',
            'question_id' => '3',
        ];
        DB::table('choices')->insert($param);
        $param = [
            'choice' => 'むかいなだ',
            'prefectures_id' => '2',
            'answer' => '1',
            'question_id' => '3',
        ];
        DB::table('choices')->insert($param);
    }
}