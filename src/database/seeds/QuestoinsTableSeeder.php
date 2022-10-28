<?php

use Illuminate\Database\Seeder;
use App\Models\Question;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $params = [
            [
                'prefectures_id' => 1,
                'image' => 'takanawa.png'
            ],
            [
                'prefectures_id' => 1,
                'image' => 'kameido.png'

            ],
            [
                'prefectures_id' => 2,
                'image' => 'mukainada.png'
            ],
        ];
        foreach ($params as $param) {
            DB::table('questions')->insert($param);
        }
    }
}
