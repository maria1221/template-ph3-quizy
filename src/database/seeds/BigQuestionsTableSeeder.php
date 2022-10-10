<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\BigQuestion;

class BigQuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $param = [
            'prefectures_name' => '東京',
        ];
        DB::table('big_questions')->insert($param);

        $param = [
            'prefectures_name' => '広島',
        ];
        DB::table('big_questions')->insert($param);
    }
}
