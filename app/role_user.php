<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class role_user extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
        'role_id','user_userId',
    ];

    public function user()
{
    return $this->belongsToMany('App\User')->withPivot('role_id');
}
}
