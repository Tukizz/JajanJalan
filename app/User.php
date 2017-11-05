<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $primaryKey = 'userId';
    public $incrementing = false;

    use Notifiable;

    public function role(){
        return $this->belongsToMany(role::class,'role_users')->withPivot('role_id');
    }


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'userId','userName','address','pictures', 'email', 'facebook', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function branch()
    {
         return $this->hasMany('App\Branch');
    }
    public function company()
    {
         return $this->hasMany('App\Company');
    }
    public function setPasswordAttribute($password)
{
    $this->attributes['password'] = \Hash::make($password);
}
}
