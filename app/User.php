<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */


    public $timestamps = false;


    protected $fillable = [
        'first_name', 'last_name', 'username', 'password', 'user_type', 'user_location',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
   /* public function users(){
        return $this->hasMany('App\User');
    }

    protected $table = 'users';
    public function user() {
        return $this->belongsTo('App\User');

    }
   */
}
