<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
       //Laravelのリレーション
    // hasOne(1対1) 主テーブルのあるレコードに対して、獣テーブルの1つのレコードが紐づけられる
    // hasMany(1対多) 主テーブルのあるレコードに対して従テーブルの複数のレコードが紐づけられる
    // belongsTo 従テーブルの複数レコードに対して、主テーブルの1つのレコードが紐づけられる(従テーブルから関連する主テーブルのレコードを取り出す)
    protected $fillable = ['image', 'prefectures_id', 'order']; 

    
    public function choices()
    {
        return $this->hasMany('App\Choice');
    }

    public function big_question()
    {
        return $this->belongsTo('App\BigQuestion');
    }
    protected $casts = [
        'id' => 'integer',
    ];
    //
}
