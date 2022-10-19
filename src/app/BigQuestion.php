<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BigQuestion extends Model
{
    //
        //Laravelのリレーション
    // hasOne(1対1) 主テーブルのあるレコードに対して、獣テーブルの1つのレコードが紐づけられる
    // hasMany(1対多) 主テーブルのあるレコードに対して従テーブルの複数のレコードが紐づけられる
    // belongsTo 従テーブルの複数レコードに対して、主テーブルの1つのレコードが紐づけられる(従テーブルから関連する主テーブルのレコードを取り出す)
    protected $fillable = ['prefectures_name']; 

    public function choices()
    {
        //保存したいカラム名が1つの場合
        // Quizテーブル(主テーブル)の県名に対して、Questionル(従テーブル)の複数レコードを紐づける
        return $this->hasMany('App\Question');
    }
    // public function updateUserFindById($prefecture_name)
    // {
    //     return $this->where([
    //         'id' => $prefecture_name['id']
    //     ])->update([
    //         'prefectures_name' => $prefecture_name['prefecture_name'],
    //     ]);
    // }
}
