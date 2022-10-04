<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
//下記を追加
use Illuminate\Foundation\Auth\User as Authenticatable;
//下記を追加
use Illuminate\Notifications\Notifiable;

class Person extends Authenticatable
{
    //
    //下記を追加
    use Notifiable;
    protected $fillable = [
        'user_id', 'password',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
