<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    protected $fillable = ['choice', 'answer', 'prefectures_id', 'question_id']; 

    public function getData()
    {
        return '名前：'.$this -> name.'---メール：'.$this -> email; 
    }
        //Laravelのリレーション
    // hasOne(1対1) 主テーブルのあるレコードに対して、獣テーブルの1つのレコードが紐づけられる
    // hasMany(1対多) 主テーブルのあるレコードに対して従テーブルの複数のレコードが紐づけられる
    // belongsTo 従テーブルの複数レコードに対して、主テーブルの1つのレコードが紐づけられる(従テーブルから関連する主テーブルのレコードを取り出す)
    public function big_questions()
    {
        //Choiceテーブル(従テーブル)の選択肢たち(複数)に対して Questionsテーブル(主テーブル)の県名を紐づける
        return $this->belongsTo('App\Questions');
    }


}
