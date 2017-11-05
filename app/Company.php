<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'mi_company';
    protected $primaryKey = 'companyId';

    public function branch()
    {
         return $this->hasMany('App\Branch');
    }
    public function user()
    {
         return $this->belongsTo('App\User','companyEnteredById');
    }
}
